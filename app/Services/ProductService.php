<?php

namespace App\Services;

use App\Base\Interfaces\uploads\ShouldHandleFileUpload;
use App\Contracts\Interfaces\Products\ProductInterface;
use App\Enums\ProductStatusEnum;
use App\Enums\UploadDiskEnum;
use App\Http\Requests\Dashboard\Product\ProductStoreRequest;
use App\Http\Requests\Dashboard\Product\ProductUpdateRequest;
use App\Http\Requests\VarianProductStoreRequest;
use App\Http\Requests\VarianProductUpdateRequest;
use App\Models\Product;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Pagination\Cursor;

class ProductService implements ShouldHandleFileUpload
{
    use UploadTrait;

    private ProductInterface $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    /**
     * Handle store data event to models.
     *
     * @param ProductStoreRequest $request
     *
     * @return array|bool
     */
    public function store(ProductStoreRequest $request): array|bool
    {
        $data = $request->validated();
        // $attachment = $request->file('attachment_file');
        // $exists = UploadDiskEnum::PRODUCT_ATTACHMENTS->value . "/" . $attachment->getClientOriginalName();

        // if ($this->exist($exists)) return false;
        return [
            'category_id' => $data['category_id'],
            'short_description' => $data['short_description'],
            'status' => $data['status'],
            'type' => $data['type'],
            'name' => $data['name'],
            'photo' => $this->upload(UploadDiskEnum::PRODUCTS->value, $request->file('photo')),
            'buy_price' => $data['buy_price'],
            'sell_price' => $data['sell_price'],
            'discount' => $data['discount'],
            'reseller_discount' => $data['reseller_discount'],
            'description' => $data['description'],
            'features' => $data['features'],
            'installation' => $data['installation'],
            // 'attachment_file' => $this->upload(UploadDiskEnum::PRODUCT_ATTACHMENTS->value, $attachment, true)
        ];
    }

    /**
     * variantProductStore
     *
     * @param  mixed $request
     * @return array
     */
    public function varianProductStore(VarianProductStoreRequest $request): array|bool
    {
        $data = $request->validated();
        // $attachment = $request->file('attachment_file');
        // $exists = UploadDiskEnum::PRODUCT_ATTACHMENTS->value . "/" . $attachment->getClientOriginalName();

        // if ($this->exist($exists)) return false;

        $varian_product = $data['name_varian'];
        $counts = array_count_values($varian_product);

        $duplicates = false;
        foreach ($counts as $varian_product => $count) {
            if ($count > 1) {
                $duplicates = true;
                break;
            }
        }

        if ($duplicates) {
            return false;
        }

        return [
            'category_id' => $data['category_id'],
            'short_description' => $data['short_description'],
            'status' => ProductStatusEnum::PREORDER->value,
            'type' => $data['type'],
            'name' => $data['name'],
            'photo' => $this->upload(UploadDiskEnum::PRODUCTS->value, $request->file('photo')),
            'buy_price' => 0,
            'sell_price' => 0,
            'name_varian' => $data['name_varian'],
            'buy_price_varian' => $data['buy_price_varian'],
            'sell_price_varian' => $data['sell_price_varian'],
            'discount' => $data['discount_varian'],
            'reseller_discount' => $data['reseller_discount_varian'],
            'description' => $data['description'],
            'features' => $data['features'],
            'installation' => $data['installation'],
            // 'attachment_file' => $this->upload(UploadDiskEnum::PRODUCT_ATTACHMENTS->value, $attachment, true)
        ];
    }

    /**
     * Handle store data event to models.
     *
     * @param Product $product
     * @param ProductUpdateRequest $request
     *
     * @return array|bool
     */

    public function update(Product $product, ProductUpdateRequest $request): array|bool
    {
        $data = $request->validated();

        $old_photo = $product->photo;
        $old_attachment = $product->attachment_file;

        if ($request->hasFile('attachment_file')) {
            $attachment = $request->file('attachment_file');
            $exists = UploadDiskEnum::PRODUCT_ATTACHMENTS->value . "/" . $attachment->getClientOriginalName();
            if ($this->exist($exists))
                return false;
            $this->remove($old_attachment);
            $old_attachment = $this->upload(UploadDiskEnum::PRODUCT_ATTACHMENTS->value, $attachment, true);
        }

        if ($request->hasFile('photo')) {
            $this->remove($old_photo);
            $old_photo = $this->upload(UploadDiskEnum::PRODUCTS->value, $request->file('photo'));
        }

        return [
            'category_id' => $data['category_id'],
            'short_description' => $data['short_description'],
            'status' => $data['status'],
            'type' => $data['type'],
            'name' => $data['name'],
            'photo' => $old_photo,
            'buy_price' => $data['buy_price'],
            'sell_price' => $data['sell_price'],
            'discount' => $data['discount'],
            'reseller_discount' => $data['reseller_discount'],
            'description' => $data['description'],
            'features' => $data['features'],
            'installation' => $data['installation'],
            'attachment_file' => $old_attachment
        ];
    }

    public function varianProductUpdate(Product $product, VarianProductUpdateRequest $request)
    {
        $data = $request->validated();

        $old_photo = $product->photo;

        if ($request->hasFile('photo')) {
            $this->remove($old_photo);
            $old_photo = $this->upload(UploadDiskEnum::PRODUCTS->value, $request->file('photo'));
        }

        return [
            'category_id' => $data['category_id'],
            'short_description' => $data['short_description'],
            'status' => ProductStatusEnum::PREORDER->value,
            'type' => $data['type'],
            'name' => $data['name'],
            'photo' => $old_photo,
            'name_varian' => $data['name_varian'],
            'buy_price_varian' => $data['buy_price_varian'],
            'sell_price_varian' => $data['sell_price_varian'],
            'discount' => $data['discount_varian'],
            'reseller_discount' => $data['reseller_discount_varian'],
            'description' => $data['description'],
            'features' => $data['features'],
            'installation' => $data['installation'],
        ];
    }

    /**
     * Handle count license stock from models.
     *
     * @param Product $product
     * @return array
     */

    public function countStocks(Product $product): array
    {
        return [
            'available' => $this->handleLicenseStocks($product, 0),
            'purchased' => $this->handleLicenseStocks($product, 1)
        ];
    }

    /**
     * Handle count license stock from models.
     *
     * @param Product $product
     * @param int $status
     * @return int
     */

    private function handleLicenseStocks(Product $product, int $status): int
    {
        return $product->licenses()->where('is_purchased', $status)->count();
    }

    /**
     * Handle count license stock from models.
     *
     * @param Request $request
     * @return array
     */

    public function handleProductFilters(Request $request): array
    {
        $nextCursor = $request->query('nextCursor') ? Cursor::fromEncoded($request->query('nextCursor')) : null;

        $products = $this->product->cursorPaginate(15, ['*'], 'cursor', $nextCursor, $request);

        if ($products->hasMorePages())
            $nextCursor = $products->nextCursor()->encode();

        return [
            'products' => $products,
            'nextCursor' => $nextCursor
        ];
    }
}

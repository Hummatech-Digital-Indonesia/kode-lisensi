<?php

namespace App\Http\Controllers\Home;

use App\Contracts\Interfaces\Products\ProductInterface;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    private ProductInterface $product;
    private ProductService $productService;
    public function __construct(ProductInterface $product, ProductService $productService)
    {
        $this->product = $product;
        $this->productService = $productService;
    }

    /**
     * show
     *
     * @param  mixed $category
     * @return View
     */
    public function show(Category $category, Request $request): View
    {
        $request->merge(['category_id' => $category->id]);
        // dd($request->category_id);
        $service = $this->productService->handleProductFilters($request);

        if ($request->ajax()) {
            $view = view('pages.cursor.infinite-products')->with('products', $service['products'])->render();

            return ResponseHelper::success([
                'html' => $view,
                'nextCursor' => $service['nextCursor']
            ], trans('alert.fetch_success'));
        }

        return view('pages.category', [
            'title' => trans('title.product'),
            'products' => $service['products'],
            'nextCursor' => $service['nextCursor'],
        ]);
    }
}

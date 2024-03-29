<?php

namespace App\Helpers;

use App\Models\ProductTestimonial;
use App\Models\Transaction;

class RatingHelper
{
    /**
     * Get product ratings with given condition
     *
     * @param string|null $product_id
     * @param string|null $status
     * @param int|null $take
     * @return object
     */

    public static function getProductRatings(?string $product_id = null, ?string $status = null, ?int $take = null): object
    {
        return ProductTestimonial::query()
            ->with(['product', 'user'])
            ->when($product_id, function ($query) use ($product_id) {
                return $query->where('product_id', $product_id);
            })
            ->when($status, function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->when($take, function ($query) use ($take) {
                return $query->take($take);
            })
            ->latest('updated_at')
            ->get();
    }

    /**
     * Sum product ratings
     *
     * @param string $product_id
     * @param string|null $status
     * @return array
     */

    public static function sumProductRatings(string $product_id, ?string $status = null): array
    {
        $sum = ProductTestimonial::query()
            ->select('rating', 'product_id')
            ->where('product_id', $product_id)
            ->when($status, function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->sum('rating');

        if ($sum == 0) {
            return [
                'sumRating' => 0,
                'stars' => 0
            ];
        }

        $rating = $sum / self::countProductRatings($product_id, $status);
        $stars = number_format(floor($rating));

        return [
            'sumRating' => number_format($rating, 1, '.', '.'),
            'stars' => (int)$stars
        ];
    }

    /**
     * count product ratings
     *
     * @param string $product_id
     * @param string|null $status
     * @return int
     */

    public static function countProductRatings(string $product_id, ?string $status = null): int
    {
        return ProductTestimonial::query()
            ->where('product_id', $product_id)
            ->when($status, function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->count();
    }

    /**
     * Check user has rating the products
     *
     * @param string $product_id
     * @return bool
     */

    public static function checkUserHasRating(string $product_id): bool
    {
        $count = ProductTestimonial::query()
            ->where(['user_id' => auth()->id(), 'product_id' => $product_id])
            ->count();

        return $count > 0;
    }

    /**
     * Check user has transaction with the products
     *
     * @param string $product_id
     * @return bool
     */

    public static function checkUserHasTransaction(string $product_id): bool
    {
        $count = Transaction::query()
            ->where('user_id', auth()->id())
            ->whereRelation('detail_transaction', 'product_id', '=', $product_id)
            ->count();

        return $count > 0;
    }

    /**
     * Get user rating the products
     *
     * @param string $product_id
     * @return object
     */

    public static function getUserRating(string $product_id): object
    {
        return ProductTestimonial::query()
            ->where(['user_id' => auth()->id(), 'product_id' => $product_id])
            ->firstOrFail();
    }
}

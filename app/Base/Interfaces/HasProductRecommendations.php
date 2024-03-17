<?php

namespace App\Base\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface HasProductRecommendations
{

    /**
     * One-to-Many relationship with Product Questions Model
     *
     * @return HasMany
     */

    public function product_recommendations(): HasMany;
}

<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CategoryService
{
    const CACHE_KEY = 'categories';
    const CACHE_TTL = 100;

    public static function getCategories(): Collection
    {
        return Cache::get(static::CACHE_KEY, Cache::remember(static::CACHE_KEY, static::CACHE_TTL, fn () => Category::all()));
    }
}


<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
use App\Models\Product;

class Products {

    static $composed;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function compose(View $view) {

        if(static::$composed) {
            return $view->with('products', static::$composed);
        }
        static::$composed = $this->product->where('active', 1)->orderBy('title', 'asc')->get();

        $view->with('products', static::$composed);
    }
}
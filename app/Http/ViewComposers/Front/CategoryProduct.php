<?php

namespace App\Http\ViewComposers\Front;

use Illuminate\View\View;
use App\Models\Product;

class ProductsCategories {

    static $composed;

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function compose(View $view) {

        if (static::$composed) {
            return $view->with('products', static::$composed);
        }
        static::$composed = $this->product->where('active', 1)->where('visible', 1)->get();
        
        $view->with('products', Product::where('active', 1)->where('visible', 1)->get());
    }

}
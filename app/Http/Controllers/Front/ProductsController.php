<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use iluminate\http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Debugbar;

class ProductsController extends Controller

{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $view = View::make('front.pages.products.index')
        ->with('products', $this->product->where('active', 1)->where('visible', 1)->get());

        return $view;
    }

    public function show(Product $product)
    {
        debugbar::info($product);
        $view = View::make('front.pages.product.index')
        ->with('product', $product);

        return $view;
    }

    // public function showByCategory(ProductCategory $category)
    // {
    //     $view = View::make('front.pages.products.index')
    //     ->with('products', $category->products()->where('active', 1)->where('visible', 1)->get());

    //     return $view;
    // }
    
}
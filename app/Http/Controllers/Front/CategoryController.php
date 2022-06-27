<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Debugbar;

class CategoryController extends Controller

{
    protected $product;

    public function __construct(ProductCategory $product_category)
    {
        $this->product_category = $product_category;
    }


    public function show(ProductCategory $product_category)
    {

        $view = View::make('front.pages.products.index')
   
        ->with('category', $product_category)
        ->with('products', $product_category->products
        ->where('active', 1));
        
        

        
        if(request()->ajax()) {
        
            $sections = $view->renderSections(); 
        
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }
        
        return $view;
    }

}

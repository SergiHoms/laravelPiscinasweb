<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
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

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }

    public function show(Product $product)
    {
        
        $view = View::make('front.pages.product.index')
        ->with('product', $product);

        if(request()->ajax()) {
        
            $sections = $view->renderSections(); 
        
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }
        
        return $view;
    }

    public function search(Request $request)
    {
        $search = request('search');

        $products =  $this->product->where('title', 'like', '%'.$search.'%')->get();
            
        $view = View::make('front.pages.products.index')->with('products', $products);
        $sections = $view->renderSections(); 
    
        return response()->json([
            'content' => $sections['content'],
        ]); 
    
    }
    
    public function filter($order)
    {
        $products =  $this->product->where('visible', 1)
        ->join('prices', 'prices.product_id', '=', 'products.id')
        ->select('products.*', 'prices.base_price')
        ->orderBy('base_price', $order)
        ->get();

            
        $view = View::make('front.pages.products.index')
        ->with('products', $products);

        if(request()->ajax()) {
            
            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],
            ]);
        }

        return $view; 
    
    }
    
    
   
    
}


<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $view = View::make('front.pages.carrito.index');

        return $view;
    }  

    public function store(Request $request)
    {
        $cart = $this->cart->create([
            'price' => request('price_id'),
            'fingerprint' => request('fingerprint'),
            'active' => 1,
        ]);
        
        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
                ->where('fingerprint', 1)
                ->groupByRaw('price_id')->get(); 

        $view = View::make('front.pages.carrito.index')
        ->with('carts', $carts)
        ->renderSections();

        return response()->json([
            'content' => $view['content'],
        ]);
    }
}
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

        for($i = 0; $i < request('quantity'); $i++) {

            $cart = $this->cart->create([
                'price_id' => request('price_id'),
                'fingerprint' => 1,
                'active' => 1,
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
                ->where('fingerprint', 1)
                ->where('active', 1)
                ->groupByRaw('price_id')->get(); 

        $view = View::make('front.pages.carrito.index')
        ->with('carts', $carts->where('active', 1)->get())
        ->with('fingerprint', $cart->fingerprint)
        ->renderSections();

        return response()->json([
            'content' => $view['content'],
        ]);
    }
}
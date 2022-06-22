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
                'customer_id' => null,
                'active' => 1,
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
                ->where('fingerprint', 1)
                ->where('active', 1)
                ->where('venta_id', null)
                ->groupBy('price_id',)
                ->get(); 

        $totals = $this->cart
            ->where('carts.fingerprint', 1)
            ->where('carts.active', 1)
            ->where('carts.venta_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
            ->first();
        
        $sections = View::make('front.pages.carrito.index')
            ->with('carts', $carts)
            ->with('fingerprint', 1)
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();
        
        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}
<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
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
                'fingerprint' => $request->cookie('fp'),
                'customer_id' => null,
                'active' => 1,
            ]);
        }

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
                ->where('fingerprint', $request->cookie('fp'))
                ->where('active', 1)
                ->where('venta_id', null)
                ->groupBy('price_id',)
                ->get(); 
        $totals = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.venta_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();
        
        $sections = View::make('front.pages.carrito.index')
            ->with('carts', $carts)
            ->with('fingerprint', $request->cookie('fp'))
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();
        
        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function plus($price_id, Request $request)
    {

        $cart = $this->cart->create([
            'price_id' => $price_id,
            'fingerprint' => $request->cookie('fp'),
            'active' => 1,
        ]);

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
                ->where('fingerprint', $request->cookie('fp'))
                ->where('active', 1)
                ->where('venta_id', null)
                ->groupBy('price_id',)
                ->get(); 

        $totals = $this->cart
            ->where('carts.fingerprint', $request->cookie('fp'))
            ->where('carts.active', 1)
            ->where('carts.venta_id', null)
            ->join('prices', 'prices.id', '=', 'carts.price_id')
            ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
            ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
            ->first();
        
        $sections = View::make('front.pages.carrito.index')
            ->with('carts', $carts)
            ->with('fingerprint', $request->cookie('fp'))
            ->with('base_total', $totals->base_total)
            ->with('tax_total', ($totals->total - $totals->base_total))
            ->with('total', $totals->total)
            ->renderSections();
        
        return response()->json([
            'content' => $sections['content'],
        ]);
    }

    public function minus($price_id, Request $request)
    {

        $cart = $this->cart
        ->where('price_id', $price_id)
        ->where('fingerprint', $request->cookie('fp'))
        ->where('active', 1)
        ->first();

        $cart->active = 0;
        $cart->save();

        $carts = $this->cart->select(DB::raw('count(price_id) as quantity'), 'price_id')
                ->where('fingerprint', $request->cookie('fp'))
                ->where('active', 1)
                ->where('venta_id', null)
                ->groupBy('price_id',)
                ->get(); 

        $totals = $this->cart
                ->where('carts.fingerprint', $request->cookie('fp'))
                ->where('carts.active', 1)
                ->where('carts.venta_id', null)
                ->join('prices', 'prices.id', '=', 'carts.price_id')
                ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
                ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('round(sum(prices.base_price * taxes.multiplicator),2) as total') )
                ->first();   

        $sections = View::make('front.pages.carrito.index')
                ->with('carts', $carts)
                ->with('fingerprint', $request->cookie('fp'))
                ->with('base_total', $totals->base_total)
                ->with('tax_total', ($totals->total - $totals->base_total))
                ->with('total', $totals->total)
                ->renderSections();  

        return response()->json([
            'content' => $sections['content'],
        ]);
    }
}
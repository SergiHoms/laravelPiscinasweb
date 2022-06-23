<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Client;
use App\Models\Checkout;
use App\Http\Requests\Front\VentaRequest;
use Debugbar;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{
    protected $cart;
    protected $client;

    public function __construct(Cart $cart, Client $client)
    {
        $this->cart = $cart;
        $this->client = $client;
    }

    public function index($fingerprint)
    {
        $totals = $this->cart
        ->where('carts.fingerprint', $fingerprint)
        ->where('carts.active', 1)
        ->where('carts.venta_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();

        $view = View::make('front.pages.checkout.index')
        ->with('fingerprint', $fingerprint)
        ->with('base_total', $totals->base_total)
        ->with('tax_total', ($totals->total - $totals->base_total))
        ->with('total', $totals->total);

        $sections = $view->renderSections();

        return response()->json([
            'content' => $sections['content'],

        ]);       

        return $view;
    }

    public function store(VentaRequest $request)
    {            
    
        $client = $this->client->create([
                'name' => request('name'),
                'surname' => request('surname'),
                'phone' => request('phone'),
                'email' => request('email'),
                'city' => request('city'),
                'postal-code' => request('postal-code'),
                'address' => request('address'),
            ]);
        
        
            
        $view = View::make('front.pages.successful_purchase.index');

        $sections = $view->renderSections(); 

        return response()->json([
            'content' => $sections['content'],
        ]); 
    }


}

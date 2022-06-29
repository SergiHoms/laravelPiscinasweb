<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Client;
use App\Models\Checkout;
use App\Http\Requests\Front\VentaRequest;
use App\Models\Venta;
use Debugbar;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{
    protected $cart;
    protected $client;
    protected $venta;

    public function __construct(Cart $cart, Client $client, Venta $venta)
    {
        $this->cart = $cart;
        $this->client = $client;
        $this->venta = $venta;
    }

    public function index()
    {
        $totals = $this->cart
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->where('carts.active', 1)
        ->where('carts.venta_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();

        $view = View::make('front.pages.checkout.index')
        ->with('fingerprint', $request->cookie('fp'))
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
    
        $totals = $this->cart
        ->where('carts.fingerprint', $request->cookie('fp'))
        ->where('carts.active', 1)
        ->where('carts.venta_id', null)
        ->join('prices', 'prices.id', '=', 'carts.price_id')
        ->join('taxes', 'taxes.id', '=', 'prices.tax_id')
        ->select(DB::raw('sum(prices.base_price) as base_total'), DB::raw('sum(prices.base_price * taxes.multiplicator) as total') )
        ->first();

        $client = $this->client->create([
                'name' => request('name'),
                'surname' => request('surname'),
                'phone' => request('phone'),
                'email' => request('email'),
                'city' => request('city'),
                'postal-code' => request('postal-code'),
                'address' => request('address'),
                'active' => 1,
            ]);

        $venta = $this->venta->latest()->first();

        if(isset($venta->ticket_number) && str_contains($venta->ticket_number, date('Ymd'))) {
            $ticket_number = $venta->ticket_number + 1;
        } else {
            $ticket_number = date('Ymd') . '0001';
        }

        $venta = $this->venta->create([
                'ticket_number' => $ticket_number,
                'time_emision' => date('H:i:s'),
                'date_emision' => date('Y-m-d'),
                'payment_method' => request('payment_method'),
                'total_base_price' => $totals->base_total,
                'total_tax_price' => $totals->total - $totals->base_total,
                'total_price' => $totals->total,
                'customer_id' => $client->id,
                'active' => 1,
            ]);


        $cart = $this->cart
        ->where('fingerprint', $request->cookie('fp'))
        ->where('venta_id', null)
        ->where('active', 1)
        ->update([
            'customer_id' => $client->id,
            'venta_id' => $venta->id
        ]);
            
        
        $view = View::make('front.pages.successful_purchase.index');

        $sections = $view->renderSections(); 

        return response()->json([
            'content' => $sections['content'],
        ]);
        
        

    }


}

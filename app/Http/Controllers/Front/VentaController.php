<<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\Front\VentaRequest;
use Debugbar;

class VentaController extends Controller
{
     
    protected $ventas;

    public function __construct(Venta $venta)
    {
    
        $this->venta = $ventas;
    }
    
    public function index()
    {

        $view = View::make('front.pages.successful_purchase.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }

    public function store(VentaRequest $request)
    {            
    
        $ventas = $this->ventas->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'phone' => request('phone'),
                'email' => request('email'),
                'message' => request('message'),
        ]);
            
        $view = View::make('front.pages.successful_purchase.index');

        if(request()->ajax()) {

            $sections = $view->renderSections();

            return response()->json([
                'content' => $sections['content'],

            ]);       
        }

        return $view;
    }
}
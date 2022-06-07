<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use iluminate\http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $view = View::make('front.pages.carrito.index');

        return $view;
    }
}
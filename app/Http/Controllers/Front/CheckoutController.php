<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use iluminate\http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index()
    {
        $view = View::make('front.pages.checkout.index');

        return $view;
    }
}

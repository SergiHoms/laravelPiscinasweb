<?php

namespace App\Http\ViewComposers\Admin;

use Illuminate\View\View;
use App\Models\Taxe;

class Taxes {

    static $composed;

    public function __construct(Taxe $taxes) {
        $this->taxes = $taxes;
    }

    public function compose(View $view) {

        if (static::$composed) {
            return $view->with('taxes', static::$composed);
        }
        
        static::$composed = $this->taxes->where('active', 1)->where('valid', 1)->get();
        
        $view->with('taxes', static::$composed);
    }

}
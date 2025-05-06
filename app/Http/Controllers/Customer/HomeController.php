<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $sliders = Slider::where('is_active', true)
        ->orderBy('publish_date', 'desc')
        ->take(5)
        ->get();

        return view('customer.home', compact('sliders'));
    }
}

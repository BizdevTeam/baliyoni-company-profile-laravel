<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_active', true)->get();
        
        return view('about', compact('sliders'));
    }

}

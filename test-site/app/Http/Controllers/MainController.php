<?php

namespace App\Http\Controllers;

use App\Block;
use App\Slider;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function ShowAllData()
    {

        $Sliders = new Slider;

        return view('welcome', ['Blocks' => Block::all(), 'SliderTop' => $Sliders->where('place', '=', 'top')->get(), 'SliderBottom' => $Sliders->where('place', '=', 'bottom')->get()]);
    }
}

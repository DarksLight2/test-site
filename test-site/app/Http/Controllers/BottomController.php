<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class BottomController extends Controller
{
    public function update(Request $request)
    {

        $Slider = new Slider;

        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            if($file->move(public_path() . '/slider/images',$file->getClientOriginalName()) !== null)
            {
                $Slider->where('id', '=', $request->id)->update(['image' => $file->getClientOriginalName()]);
            }
        }

        if($request->name === null)
        {
            $request->name = 0;
        }

        if($request->text === null)
        {
            $request->text = 0;
        }

        if($Slider->where('id', '=', $request->id)->update(['name' => $request->name, 'content' => $request->text]))
        {
            return redirect(route('slider', $request->id));
        }

        return 'err';
    }
}
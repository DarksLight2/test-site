<?php

namespace App\Http\Controllers;

use App\Block;
use App\Slider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.index');
    }

    public function edit_section($SectionType)
    {
        $Section = new Block;

        $SectionData = $Section->where('type_section', '=', $SectionType)->get();

        return view('admin.edit_section', ['SectionData' => $SectionData]);
    }

    public function editing_section($SectionType, Request $request)
    {
        $Section = new Block;

        $Section->where('type_section', '=', $SectionType)->update([
            'name' => $request->name,
            'title_first_block' => $request->title_first_block,
            'content_first_block' => $request->content_first_block,
            'title_second_block' => $request->title_second_block,
            'content_second_block' => $request->content_second_block,
            'title_third_block' => $request->title_third_block,
            'content_third_block' => $request->content_third_block,
            'title_fourth_block' => $request->title_fourth_block,
            'content_fourth_block' => $request->content_fourth_block,
            'title_fifth_block' => $request->title_fifth_block,
            'content_fifth_block' => $request->content_fifth_block,
            'title_sixth_block' => $request->title_sixth_block,
            'content_sixth_block' => $request->content_sixth_block,
        ]);

        return redirect('/');
    }

    public function edit_bottom_slider($SliderID)
    {
        $Slider = new Slider;

        $SliderData = $Slider->where('id', '=', $SliderID)->get();

        return view('admin.edit_bottom_slider', ['SliderData' => $SliderData]);
    }

    public function slidersToEdit()
    {
        $Slider = new Slider;

        return view('admin.edit_slider', ['SliderData' => $Slider->get()]);
    }

    public function changeImageSection($SectionID, Request $Request)
    {
        if($Request->hasFile('file'))
        {
            $Section = new Block;

            $Path = public_path('section/images/');
            $NameImage = time() .'_'.$SectionID.'.png';
            $File = $Request->file('file');

            $OldImageSection = $Section->where('id', '=', $SectionID)->get()[0]['image_'.$Request->image];

            if($OldImageSection !== null)
            {
                if(file_exists($Path . $OldImageSection))
                {
                    unlink($Path . $OldImageSection);
                }
            }

            if($File->move($Path, $NameImage) !== null)
            {
                if($Section->where('id', '=', $SectionID)->update(['image_'.$Request->image => $NameImage]))
                {
                    return redirect(route('section', $SectionID));
                }

                return '!!!Error!!! Failed to execute database query';

            }
            else
            {
                return '!!!Error!!! Check your uploading image.';
            }
        }

        return '!!!Error!!! Please check your input data.';
    }
}

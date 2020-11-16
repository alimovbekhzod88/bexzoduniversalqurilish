<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Section;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::all();
        return view("gallerys.gallery", compact("gallerys"));
    }

    public function create()
    {
        $sections = Section::all();
        return view("gallerys.create", compact("sections"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_id' => 'max:255',
            'image' => 'file'
        ]);

        $gallery = new Gallery();
        $gallery->section_id = $request->input('section_id');
        // $gallery->image = $request->input('image');
        $gallery->image = $request->file("image")->storeAs("images", $request->file("image")->getClientOriginalName());

        $gallery->save();

        return redirect()->route("gallerys")->with("success");
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $section = Section::all();
        return view(
            "gallerys.edit",
            [
                'gallery' => $gallery,
                'sections' => $section
            ],

        );
    }

    public function update($id, Request $request)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->section_id = $request->input('section_id');
        // $gallery->image = $request->input('image');
        $gallery->image = $request->file("image")->storeAs("images", $request->file("image")->getClientOriginalName());

        $gallery->save();
        return redirect()->route("gallerys")->with("success");
    }

    public function delete($id)
    {
        Gallery::destroy($id);

        return redirect()->route("gallerys");
    }
}

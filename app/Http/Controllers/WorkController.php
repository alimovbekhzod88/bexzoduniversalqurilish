<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view("works.works", compact("works"));
    }

    public function create()
    {
        return view("works.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'max:255',
            'text' => 'max:255',
            'image' => 'file'
        ]);

        $work = new Work();

        $work->title = $request->input("title");
        $work->text = $request->input("text");
        $work->images = $request->file("image")->storeAs("images", $request->file("image")->getClientOriginalName());


        $work->save();

        return redirect()->route("works")->with("success");
    }

    public function delete($id)
    {
        Work::destroy($id);

        // $work->delete();

        return redirect()->route("works");
    }

    public function edit($id)
    {
        $work = Work::findOrFail($id);

        return view("works.edit", compact("work"));
    }

    public function update($id, Request $request)
    {
        $work = Work::findOrFail($id);

        $work->title = $request->input("title");
        $work->text = $request->input("text");
        $work->images = $request->file("image")->storeAs("images", $request->file("image")->getClientOriginalName());

        $work->save();

        return redirect()->route("works")->with("success");
    }
}

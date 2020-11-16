<?php

namespace App\Http\Controllers;

use App\DataFilter;
use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view("sections.sections", compact("sections"));
    }

    public function create()
    {
        $datafilters = DataFilter::all();
        return view("sections.create", compact("datafilters"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:255',
            'dataFilter' => 'max:255'
        ]);

        $section = new Section();

        $section->name = $request->input('name');
        $section->data_filter_id = $request->input('dataFilter');
        $section->save();

        return redirect()->route("sections")->with("success");
    }

    public function edit($id)
    {
        $section = Section::findOrFail($id);
        $datafilters = DataFilter::all();
        return view(
            "sections.edit",
            [
                'section' => $section,
                'datafilters' => $datafilters
            ]
        );
    }

    public function update($id, Request $request)
    {
        $section = Section::findOrFail($id);

        $section->name = $request->input('name');
        $section->data_filter_id = $request->input('dataFilter');

        $section->save();

        return redirect()->route("sections")->with("success");
    }

    public function delete($id)
    {
        Section::destroy($id);

        // $work->delete();

        return redirect()->route("sections");
    }
}

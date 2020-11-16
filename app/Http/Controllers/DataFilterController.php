<?php

namespace App\Http\Controllers;

use App\DataFilter;
use Illuminate\Http\Request;

class DataFilterController extends Controller
{
    public function index()
    {
        $datafilters = DataFilter::all();
        return view("datafilter.datafilter", compact("datafilters"));
    }

    public function create()
    {
        return view("datafilter.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:255'
        ]);

        $datafilter = new DataFilter();

        $datafilter->name = $request->input('name');
        $datafilter->save();

        return redirect()->route("datafilters")->with("success");
    }

    public function edit($id)
    {
        $datafilter = DataFilter::findOrFail($id);
        return view("datafilter.edit", compact('datafilter'));
    }

    public function update($id, Request $request)
    {
        $datafilter = DataFilter::findOrFail($id);

        $datafilter->name = $request->input('name');
        $datafilter->save();

        return redirect()->route("datafilters")->with("success");
    }

    public function delete($id)
    {
        DataFilter::destroy($id);

        // $work->delete();

        return redirect()->route("datafilters");
    }
}

<?php

namespace App\Http\Controllers;

use App\DataFilter;
use App\Gallery;
use App\Section;
use App\Work;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $works = Work::all();
        $sections = Section::all();
        $datafilters = DataFilter::all();
        $gallerys = Gallery::all();
        // $section_names = [];

        // foreach ($gallerys as $gallery) {
        //     $section_name = DB::table("data_filters")->select(["name"])->where("id", $gallery->gallery->data_filter_id)->get();
        //     array_push($section_names, $section_name);
        // }
        return view("index", compact("works", "sections", "datafilters", "gallerys"));
    }
}

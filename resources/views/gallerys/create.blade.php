@extends('layouts.main')

@section('gallerys')
    <div class="panel-body">
        <form class="form-horizontal form-bordered" method="post" action="{{ route('gallerySave') }}"
            enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Section</label>
                <div class="col-md-6">
                    <select class="col-md-10 control-label" name="section_id" id="">
                        <option>--State--</option>
                        @foreach ($sections as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>

                        @endforeach

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Image</label>
                <div class="col-md-6">
                    <input type="file" id="inputReadOnly" class="form-control" name="image">
                </div>
            </div>




            <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="/Gallerys" type="Back" class="btn btn-default">Back</a>

                </div>
            </div>
        </form>
    </div>
@endsection

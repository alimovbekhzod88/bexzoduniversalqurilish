@extends('layouts.main')

@section('datafilter')
    <div class="panel-body">
        <form class="form-horizontal form-bordered" method="post"
            action="{{ route('updateDatafilter', ['id' => $datafilter->id]) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputDefault" name="name" value="{{ $datafilter->name }}">
                </div>
            </div>


            <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="/datafilters" type="Back" class="btn btn-default">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection

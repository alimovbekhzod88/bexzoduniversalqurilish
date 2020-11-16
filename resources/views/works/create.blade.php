@extends('layouts.main')

@section('works')
    <div class="panel-body">
        <form class="form-horizontal form-bordered" method="post" action="{{ route('workSave') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Title</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputDefault" name="title">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Text</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputDefault" name="text">
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
                    <a href="/works" type="Back" class="btn btn-default">Back</a>

                </div>
            </div>
        </form>
    </div>
@endsection

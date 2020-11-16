@extends('layouts.main')

@section('section')
    <div class="panel-body">
        <form class="form-horizontal form-bordered" method="post"
            action="{{ route('updateSection', ['id' => $section->id]) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="inputDefault" name="name" value="{{ $section->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="inputDefault">Data Filter</label>
                <div class="col-md-6">
                    <select class="col-md-10 control-label" name="dataFilter" id="">
                        <option>--State--</option>
                        @foreach ($datafilters as $datafilter)
                            <option value="{{ $datafilter->id }}">{{ $datafilter->name }}</option>

                        @endforeach

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <a href="/sections" type="Back" class="btn btn-default">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends("layouts.main");

@section('sections')
    <div class="row">
        <a href="{{ route('createSection') }}" class="btn btn-success" type="button">Create Section</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Data Filter</th>
                    <th class="text-center">Created</th>
                    <th class="text-center">Actions</th>
                </tr>
                @foreach ($sections as $section)
                    <tr>
                        <td class="text-center">{{ $section->name }}</td>
                        <td class="text-center">{{ $section->datafilter->name }}</td>
                        <td class="text-center">{{ $section->created_at }}</td>
                        <td class="text-center">
                            <div style="display: flex; justify-content: center">
                                <a href="{{ route('sectionEdit', ['id' => $section->id]) }}" class="fa fa-edit"
                                    style="padding-right: 2vh; font-size: 25px"></a>
                                <form action="{{ route('deleteSections', ['id' => $section->id]) }}" method="POST"
                                    style="font-size: 20px; color:#0088cc;">
                                    @method("DELETE")
                                    @csrf
                                    <button href="{{ route('deleteSections', ['id' => $section->id]) }}" role="button"
                                        class="fa fa-trash-o danger" style="display: flex; font-size: 23px; border: none "
                                        onclick="confirm('Are you sure ? ')"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection

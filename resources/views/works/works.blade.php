@extends("layouts.main");

@section('name')
    <div class="row">
        <a href="{{ route('createWork') }}" class="btn btn-success" type="button">Create Work</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Text</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Created</th>
                    <th class="text-center">Actions</th>
                </tr>
                @foreach ($works as $work)
                    <tr>
                        <td class="text-center">{{ $work->title }}</td>
                        <td class="text-center" style="width: 50vh">{{ $work->text }}</td>
                        <td class="text-center">{{ $work->images }}</td>
                        <td class="text-center">{{ $work->created_at }}</td>
                        <td class="text-center">
                            <div style="display: flex; justify-content: center">
                                <a href="{{ route('workEdit', ['id' => $work->id]) }}" class="fa fa-edit"
                                    style="padding-right: 2vh; font-size: 25px"></a>
                                <form action="{{ route('deleteWorks', ['id' => $work->id]) }}" method="POST"
                                    style="font-size: 20px; color:#0088cc;">
                                    @method("DELETE")
                                    @csrf
                                        <button href="{{ route('deleteWorks', ['id' => $work->id]) }}" role="button"
                                            class="fa fa-trash-o danger" style="display: flex; font-size: 23px; border: none " onclick="confirm('Are you sure ? ')"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection

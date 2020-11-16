@extends("layouts.main");

@section('datafilters')
    <div class="row">
        <a href="{{ route('createDatafilter') }}" class="btn btn-success" type="button">Create DataFilter</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Created</th>
                    <th class="text-center">Actions</th>
                </tr>
                @foreach ($datafilters as $datafilter)
                    <tr>
                        <td class="text-center">{{ $datafilter->name }}</td>
                        <td class="text-center">{{ $datafilter->created_at }}</td>
                        <td class="text-center">
                            <div style="display: flex; justify-content: center">
                                <a href="{{ route('datafilterEdit', ['id' => $datafilter->id]) }}" class="fa fa-edit"
                                    style="padding-right: 2vh; font-size: 25px"></a>
                                <form action="{{ route('deleteDatafilter', ['id' => $datafilter->id]) }}" method="POST"
                                    style="font-size: 20px; color:#0088cc;">
                                    @method("DELETE")
                                    @csrf
                                    <button href="{{ route('deleteDatafilter', ['id' => $datafilter->id]) }}" role="button"
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

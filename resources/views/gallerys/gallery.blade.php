@extends("layouts.main");

@section('gallerys')
    <div class="row">
        <a href="{{ route('createGallery') }}" class="btn btn-success" type="button">Create Gallery</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">Section</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Created</th>
                    <th class="text-center">Actions</th>
                </tr>
                @foreach ($gallerys as $gallery)
                    <tr>
                        <td class="text-center">{{ $gallery->gallery->name }}</td>
                        <td class="text-center">{{ $gallery->image }}</td>
                        <td class="text-center">{{ $gallery->created_at }}</td>
                        <td class="text-center">
                            <div style="display: flex; justify-content: center">
                                <a href="{{ route('galleryEdit', ['id' => $gallery->id]) }}" class="fa fa-edit"
                                    style="padding-right: 2vh; font-size: 25px"></a>
                                <form action="{{ route('deleteGallery', ['id' => $gallery->id]) }}" method="POST"
                                    style="font-size: 20px; color:#0088cc;">
                                    @method("DELETE")
                                    @csrf
                                    <button href="{{ route('deleteGallery', ['id' => $gallery->id]) }}" role="button"
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

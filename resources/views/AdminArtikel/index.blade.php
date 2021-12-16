@extends('adminlte::page')

@section('title', 'List Story')

@section('content_header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1 class="m-0 text-dark">List Story</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <a class="btn btn-primary mb-2" data-bs-toggle="modal" href="#store-modal" role="button">Tambah Data User</a> --}}
                    {{-- <a href="{{route('users.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a> --}}
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Ilustrasi</th>
                            <th>Isi</th>
                            <th>Penulis</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stories as $key => $story)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$story->judul}}</td>
                                <td> <img src="{{asset('storage/'. $story->image_path)}}" alt="" width="100cm" height="100cm">
                                    </td>
                                <td>{{$story->isi}}</td>
                                <td>{{$story->user->name}}</td>
                                <td>
                                    <a href="{{route('stories.destroy', $story->id_story)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @stop

    @push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();

            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush

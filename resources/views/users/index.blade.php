@extends('adminlte::page')

@section('title', 'List User')

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
    <h1 class="m-0 text-dark">List User</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary mb-2" data-bs-toggle="modal" href="#store-modal" role="button">Tambah Data User</a>
                    {{-- <a href="{{route('users.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a> --}}
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Poto Profile</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$user->name}}</td>
                                <td> <img src="{{asset('storage/'. $user->image_profile)}}" alt="" width="100cm" height="100cm">
                                    </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    <button  class="btn btn-primary btn-xs" id="get-data" data-id="{{$user->id}}">
                                        Edit
                                    </button>
                                    <a href="{{route('users.destroy', $user)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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
    {{-- Tambah User Modal --}}
    <div class="modal fade" id="store-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">Tambah User</h5>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> X </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="floatingInput">NAMA</label>
                            <input type="text" class="form-control" placeholder="Full Name" value="{{old('name')}}" name="name" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="floatingInput">Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com" name="email" value="{{old('email')}}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="floatingPassword">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Konfirmasi Password</label>
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="floatingPassword">Poto Profile</label>
                            <input type="file" class="form-control" accept=".jpg,.png,.jpeg" name="image_profile" required autofocus>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="submit btn btn-primary">Tambah User</button>
                    </div>
                </form>
        </div>
        </div>
      </div>
      {{-- End Modal --}}
      {{-- Edit Modal --}}
      <div class="modal fade" id="edit-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <form action="{{route('updateuser')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">Edit User</h5>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> X </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="idM">
                        <div class="form-group">
                            <label for="floatingInput">NAMA</label>
                            <input type="text" class="form-control"  placeholder="Full Name" value="{{old('name')}}" name="name" required autofocus id="namaM">
                        </div>
                        <div class="form-group">
                            <label for="floatingInput">Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com" name="email" value="{{old('email')}}" required autofocus id="emailM">
                        </div>
                        <div class="form-group">
                            <label for="floatingPassword">Password</label>
                            <input type="password" class="form-control"  placeholder="Password" name="password" value="{{ old('password') }}" required autofocus id="password_m">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Konfirmasi Password</label>
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" autofocus required id="password_cm">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="submit btn btn-primary">Update User</button>
                    </div>
                </form>
        </div>
        </div>
      </div>
      <script type=text/javascript>
        $(document).ready(function() {
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }   });
            $('body').on('click', '#get-data', function () {
                var id = $(this).data('id');
             $.get('edituser/'+ id, function (data) {
              $('#edit-modal').modal('show');
              $('#idM').val(data.id);
              $('#namaM').val(data.name);
              $('#emailM').val(data.email);
          })
       });
      });
       </script>
      {{-- End --}}
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div style="padding-top:10px;">Data User</div>
                    <a href="create-user" class="btn btn-success">Tambah User</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Role</th>
                                @if(Auth::User()->id_role == 1)
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role->role_name}}</td>
                                @if(Auth::User()->id_role == 1)
                                <td><a href="edit-user/{{$item->id}}" class="btn btn-warning">Edit</a> <a href="hapus-user/{{$item->id}}" class="btn btn-danger">Hapus</a></td>
                                @endif
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data User') }}</div>
                <div class="card-body">
                    <form action="create-user" method="post">
                        @csrf
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail">
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="address">Address</label>
                            <div class="col-sm-10">
                                <textarea name="address" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row" style="margin:20px;">
                            <label class="control-label col-sm-2" for="id_role">Role</label>
                            <div class="col-sm-10">
                                <select name="id_role" id="id_role" class="form-control">
                                    @foreach($datarole as $item)
                                        <option value="{{$item->id}}">{{$item->role_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="submit" style="margin:20px;" value="Submit" class="btn btn-primary col-md-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

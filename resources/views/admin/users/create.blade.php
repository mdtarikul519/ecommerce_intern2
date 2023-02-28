@extends('admin.layout.dashboard_layout') @section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">User managment</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">User Template</a></li>
                        <li class="breadcrumb-item active">User managment</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('dashboard.user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                        <h2>User list</h2>
                         <a href="{{route('dashboard.user.index')}}" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a>
                    </div>
                    <div class="card-body">
                        <div class="from-group col-md-6">
                            <label for="">Username</label>
                            <input value="{{old('username')}}" type="text" name="username" class="form-control" />
                            @error('username')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="from-group col-md-6">
                            <label for="">Email</label>
                            <input value="{{old('email')}}" type="email" name="email" class="form-control" />
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="from-group col-md-6">
                            <label for="">phone_number</label>
                            <input value="{{old('phone_number')}}" type="text" name="phone_number" class="form-control" />
                            @error('phone_number')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="from-group col-md-6">
                            <label for="">User_Role</label>

                            <select name="role_id" id="" class="form-control">
                                <option value="">Select Role</option>
                                @foreach ( $roles as $role )
                                <option {{$role->serial == old('role_id')?'selected':''}} value="{{$role->serial}}">
                                    {{$role->title}}
                                </option>
                                @endforeach
                            </select>
                            {{-- @php
                            dump(old('role_id'));
                           @endphp --}}
                            @error('role_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="from-group col-md-6">
                            <label for="">Photo</label>
                            <input value="{{old('photo')}}" type="file" name="photo" class="form-control" />
                            @error('photo')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="from-group col-md-6">
                            <label for="">password</label>
                            <input  value="{{old('password')??"12345678"}}" type="password" name="password" class="form-control" />
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="from-group col-md-6">
                            <label for="">Confirm Password</label>
                            <input value="{{old('password_confirmation')??"12345678"}}" type="password" name="password_confirmation" class="form-control" />
                            @error('password_confirmation')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center card-footer">
                        <button class="btn btn-outline-info">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

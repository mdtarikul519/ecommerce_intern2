@extends('admin.layout.dashboard_layout') @section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">User_role managment</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">User_role Template</a></li>
                        <li class="breadcrumb-item active">User_role managment</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('dashboard.user_role.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                        <h2>User_role Create</h2>
                         <a href="{{route('dashboard.user_role.index')}}" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a>
                    </div>
                    <div class="card-body">


                        <div class="from-group col-md-6">

                            <div class="from-group col-md-6">
                                <label for="">User Role</label>
                                <input value="{{old('title')}}" type="text" name="title" class="form-control" />
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                         {{--
                            <select name="title" id="" class="form-control">
                                <option value="">Select Role</option>
                                @foreach ( $roles as $role )
                                <option {{$role->serial == old('title')?'selected':''}} value="{{$role->title}}">
                                    {{$role->title}}
                                </option>
                                @endforeach
                            </select> --}}


                            {{-- @php
                            dump(old('role_id'));
                           @endphp --}}
                            @error('role_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="from-group col-md-6">
                            <label for="">Serial</label>
                            <input value="{{old('serial')}}" type="number" name="serial" class="form-control" />
                            @error('serial')
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

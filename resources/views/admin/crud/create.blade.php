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
            <form action="{{route('dashboard.students.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                        <h2>User_role Create</h2>
                         <a href="{{route('dashboard.user_role.index')}}" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a>
                    </div>
                    <div class="card-body">

                        <div class="from-group col-md-6">
                            <label for="">Name</label>
                            <input value="" type="text" name="name" class="form-control" />
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="from-group col-md-6">
                            <label for="">role</label>
                            <input value="" type="text" name="role" class="form-control" />
                            @error('role')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="from-group col-md-6">
                            <label for="">Department</label>
                            <input value="" type="text" name="department" class="form-control" />
                            @error('department')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="from-group col-md-6">
                            <label for="">Subject</label>
                            <input value="" type="text" name="subject" class="form-control" />
                            @error('subject')
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

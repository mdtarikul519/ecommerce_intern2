
@extends('admin.layout.dashboard_layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Rolle assain </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Role assain</a></li>
                            <li class="breadcrumb-item active">Role assain</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                        <h2>Role assain list</h2>
                         <a href="{{route('dashboard.user_role.create')}}" class="btn btn-outline-info">Create</a>
                    </div>
                    <div class="card_body">
                         <div class="col-md-6 ps-4">
                            <form action="{{route('dashboard.user_permission.user_store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="from-group col-md-6">
                                    <label for="">{{$data->username}}</label>
                                     {{$data->user_id}}
                                    <input value="{{$data->id}}" type="text" name="{{$data->user_id}}" class="form-control" />

                                </div>

                             {{-- <input type="text" value="{{$data->id}}" name="{{$data->username}}"> --}}
                                      {{-- <option  value="{{$data->id}}">{{$data->username}}</option> --}}

                                <div>
                                  <h3>user role :</h3>
                                  @foreach ($userRoles as $userRole)
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$userRole->id}}" name="role_id" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$userRole->title}}
                                    </label>
                                  </div>
                                  @endforeach
                                </div>
                                  <div class="text-center card-footer">
                                    <button class="btn btn-outline-info">submit</button>
                                  </div>
                            </form>
                         </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

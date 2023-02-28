

@extends('admin.layout.dashboard_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Manage User_role</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">User Role</a></li>
                            <li class="breadcrumb-item active">Billing Email</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="">
                    <div class="card">
                        <div class="card_header">
                            <h2 class="card_style">User_Role View</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>User_id</td>
                                    <td>:</td>
                                    <td>{{$data->user_id}}</td>
                                </tr>
                                <tr>
                                    <td>Role_id</td>
                                    <td>:</td>
                                    <td>{{$data->role_id}}</td>
                                </tr>

                                {{-- <tr>
                                    <td>Image</td>
                                    <td>:</td>
                                    <td><img height="100px" width="100px" class="rounded-circle" src="/{{($data->photo)}}" alt=""></td>
                                </tr> --}}

                            </table>

                            </div>
                            <div class=" text-center card-footer">
                                <button class="btn btn-outline-info">submit</button>
                            </div>
                        </div>
                  </form>
            </div>
        </div>
    </div>
@endsection

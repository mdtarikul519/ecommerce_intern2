

@extends('admin.layout.dashboard_layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">User role</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">User role</a></li>
                            <li class="breadcrumb-item active">All User_Role</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                        <h2>User_Role list</h2>
                         <a href="{{route('dashboard.user_role.create')}}" class="btn btn-outline-info">Create</a>
                    </div>
                    <div class="card_body">

                        <div class="table-responsive table_wraper">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Serial</th>
                                        <th style="width: 155px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ( $data as $item )
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->serial}}</td>
                                        {{-- <td>{{$item->email}}</td>
                                        <td><img src="/{{ $item->photo }}" style="width: 50px" alt=""></td> --}}
                                        <td>
                                            <div class="table_action">
                                                <ul>
                                                    <li><a class="btn btn-sm btn-outline-info" href="{{route ('dashboard.useruser_role.assain_role', $item->id) }}"><i class="bx bx-user"></i></a></li>
                                                    <li><a class="btn btn-sm btn-outline-info" href="{{route ('dashboard.user_role.edit', $item->id) }}"><i class="bx bx-pencil"></i></a></li>
                                                    <li><a class="btn btn-sm btn-outline-warning" href="{{route ('dashboard.user_role.view', $item->id) }}"><i class="bx bx-zoom-in"></i></a></li>
                                                    <li><a class="btn btn-sm btn-outline-danger" onclick="return confirm('Do you want to confirm')" href="{{route ('dashboard.user_role.destroy', $item->id) }}"><i class="bx bxs-trash"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                               @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- <nav aria-label="...">
                        {!! $data->links()!!}
                    </nav> --}}


                </div>
            </div>
        </div>
    </div>
@endsection

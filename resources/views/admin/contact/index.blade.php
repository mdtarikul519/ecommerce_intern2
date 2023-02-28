

@extends('admin.layout.dashboard_layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Contact</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">index Template</a></li>
                            <li class="breadcrumb-item active">All Contact</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card_header">
                        <h2>Contact list</h2>
                    </div>
                    <div class="card_body">

                        <div class="table-responsive table_wraper">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Contact Name</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th style="width: 155px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->subject}}</td>
                                        <td>{{$item->message}}</td>
                                        {{-- <td><img src="{{asset('$item->photo')}}" style="width: 120px" alt=""></td> --}}
                                        <td>
                                            <div class="table_action">
                                                <ul>
                                                    <li><a class="btn btn-sm btn-outline-info" href="{{route('dashboard.contact.show', $item->id)}}"><i class="bx bx-pencil"></i></a></li>
                                                    <li><a class="btn btn-sm btn-outline-warning" href=""><i class="bx bx-zoom-in"></i></a></li>
                                                    <li><a class="btn btn-sm btn-outline-danger" onclick="return confirm('Do you want to confirm')" href="{{route('dashboard.contact.destroy' , $item->id)}}"><i class="bx bxs-trash"></i></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                               @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>

                    <nav aria-label="...">
                        {!!$data->links()!!}
                        {{-- <ul class="pagination pagination-lg">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul> --}}
                    </nav>


                </div>
            </div>
        </div>
    </div>
@endsection

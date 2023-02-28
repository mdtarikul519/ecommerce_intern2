

@extends('admin.layout.dashboard_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Contact</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email Template</a></li>
                            <li class="breadcrumb-item active">Contact page</li>
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
                            <h2 class="card_style">Contact show</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <td>Subject</td>
                                    <td>:</td>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td>:</td>
                                    <td>{{$data->message}}</td>
                                </tr>

                                <tr>
                                    <td>Created_at</td>
                                    <td>:</td>
                                    <td>{{$data->created_at->format('d-m-y h:i:s a') }}</td>
                                </tr>
                                <tr>
                                    <td>updated_at</td>
                                    <td>:</td>
                                    <td>{{$data->updated_at->format('d-m-y h:i:s a')}}</td>
                                </tr>
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

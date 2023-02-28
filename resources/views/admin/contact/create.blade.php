

@extends('admin.layout.dashboard_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Contact Manegment</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email Template</a></li>
                            <li class="breadcrumb-item active">contact</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="">
                    <div class="card">
                        <div class="card_header">
                            <h2 class="card_style">Contact list</h2>
                        </div>
                        <div class="card-body">
                            <div class="from-group col-md-6">
                                <label for="">lavel</label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="from-group col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="from-group col-md-6">
                                <label for="">Email</label>
                                <input type="text" name="" class="form-control">
                            </div>
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

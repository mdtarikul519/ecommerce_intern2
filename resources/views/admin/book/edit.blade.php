@extends('admin.layout.dashboard_layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">CrudBook Edit</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">CrudBook Template</a></li>
                            <li class="breadcrumb-item active">CrudBook Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('dashboard.crudbook.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                            <h2>CrudBook Edit</h2>
                            {{-- <a href="{{route('dashboard.user_role.index')}}" class="btn btn-outline-info"> <i class="fa fa-arrow-left">Back</i></a> --}}
                        </div>
                        <div class="card-body">

                            <div class="from-group col-md-6">
                                <label for="">Title</label>
                                <input value="{{ $editdata->title }}" type="text" name="title" class="form-control" />
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="from-group col-md-6">
                                <label for="">Author</label>
                                {{-- @dd($editdata->crud_author) --}}
                                <select class="form-control" name="author[]">
                                    @foreach ($CrudAuthors as $data)
                                        <option {{ $editdata->crud_author->firstWhere('id',$data->id) ? 'selected':'' }} value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- <div class="from-group col-md-6">
                            <label for="">Publiser</label>
                            <select class="form-control" name="publiser[]" >
                                @foreach ($publis as $publisr)
                                    
                                <option value="{{ $publisr->id}}">{{ $publisr->name}}</option>
                                @endforeach
                        </select>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div> --}}


                            <div class="from-group col-md-6">
                                <label for="">Image</label>
                                <input value="" type="file" name="image" class="form-control" />
                                @error('image')
                                    <div class="text-danger">{{ $image }}</div>
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

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
                <form action="{{ route('dashboard.shop.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                            <h2>Shop Create</h2>
                            <a href="{{ route('dashboard.fruite.index') }}" class="btn btn-outline-info"> <i
                                    class="fa fa-arrow-left">Back</i></a>
                        </div>
                        <div class="card-body">

                            <div class="from-group col-md-6">
                                <label for="">Name</label>
                                <input value="" type="text" name="shop_name" class="form-control" />
                                @error('name')
                                    <div class="text-danger">{{ $name }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-6">
                                <label>Fruits name:</label>
                            @foreach($fruites as $item) 
                              <label for="gardining{{ $item->id}}">
                                <input type="checkbox" value="{{ $item->id}}" id="gardining{{ $item->id}}" name="fruites_name[]">
                                   {{ $item->fruites_name}}
                                </label>
                            @endforeach
                                 
                            </div>
                            {{-- <div class="form-group mb-3">
                                <label >Fruits name:</label>
                                     <select class="form-control" name="fruites_name" >
                                    @foreach($fruites as $item)
                                        <option value="{{$item->id}}">{{$item->fruites_name}}</option>
                                    @endforeach
                                    </select>
                                </div> --}}
                            <div class="from-group col-md-6">
                                <label for="">Description</label>
                                <input value="" type="text" name="discription" class="form-control" />
                                @error('description')
                                    <div class="text-danger">{{ $description }}</div>
                                @enderror
                            </div>
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

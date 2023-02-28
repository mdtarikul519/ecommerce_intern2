

@extends('admin.layout.dashboard_layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Crud page</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Crud page</a></li>
                            <li class="breadcrumb-item active">All Crud page</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
         <form action="{{route('dashboard.crud.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-3" >
                                    <label for="">title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                    <input type="text" name="Description" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                <label >User Role:</label>
                                     <select class="form-control" name="role" >
                                    @foreach($data as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Hobby::</label>
                                      <label for="gardining">
                                        <input type="checkbox" value="gardining" id="gardining" name="hobby[]">
                                          gardining
                                      </label>
                                      <label for="reding">
                                        <input type="checkbox" value="reding" id="reding" name="hobby[]">
                                        reding
                                      </label>
                                      <label for="sweeming">
                                        <input type="checkbox"  value="sweeming" id="sweeming" name="hobby[]">
                                          sweeming
                                      </label>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Gender::</label>
                                      <label for="female">
                                        <input type="radio" value="female" id="female" name="gender">
                                          female
                                      </label>
                                      <label for="others">
                                        <input type="radio" value="others" id="others" name="gender">
                                        others
                                      </label>
                                      <label for="sweeming">
                                        <input type="radio"  value="sweeming" id="sweeming" name="gender">
                                          sweeming
                                      </label>
                                </div>


          
                                <div class="form-group mb-3">
                                    <label for="">image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <button>Submit</button>

                            </div>
                        </div>
                    </div>
                </div>
              </div>
         </form>

         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>title</th>
                                            <th>role</th>
                                            <th>hobby</th>
                                            <th>image</th>
                                            <th>gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                          @foreach ($all_data as $item)
                                             <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->role }}</td>
                                                <td>
                                                 @if ($item->hobby)
                                                    <ol>
                                                        @foreach ( json_decode($item->hobby) as $hobby)
                                                           <li>{{ $hobby }}</li>
                                                        @endforeach
                                                    </ol>
                                                 @endif
                                                </td>
                                                <td>
                                                    <img src="/{{ $item->image }}" height="100px" alt="">
                                                  
                                                </td>
                                                <td>{{ $item->gender }}</td>
                                            </tr> 
                                          @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
@endsection

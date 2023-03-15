

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
        @if(request()->has('edit_form'))
            <form action="{{route('dashboard.crud.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="container">
                    <h2>Edit Form</h2>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <input type="hidden" name="id" value="{{ $crud_model->id }}">
                
                                <div class="form-group mb-3" >
                                    <label for="">title</label>
                                    <input type="text" name="title" value="{{ $crud_model->title }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                    <input type="text" name="Description" value="{{ $crud_model->Description }}" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                <label >User Role:</label>
                                        <select class="form-control" name="role" >
                                    @foreach($data as $item)
                                        <option {{ $crud_model->role == $item->id?'selected':"" }} value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                    </select>
                                </div>

                             <div class="form-group mb-3">
                                    <label>Hobby::</label>
                                @foreach($hobbies as $item) 
                                    <label for="gardining{{ $item->id}}">
                                    <input type="checkbox" {{ $crud_model->hobbies->firstwhere('id', '=', $item->id)?'checked':"" }} value="{{ $item->id}}" id="gardining{{ $item->id}}" name="hobby[]">
                                        {{ $item->title}}
                                    </label>
                                @endforeach
                                        
                                </div>
                                <div class="form-group mb-3">
                                    <label>Gender::</label>
                                        <label for="male">
                                        <input type="radio" {{ $crud_model->gender == "male"?'checked':"" }} value="male" id="male" name="gender">
                                            male
                                        </label>
                                        <label for="female">
                                        <input type="radio" {{ $crud_model->gender == "female"?'checked':"" }} value="female" id="female" name="gender">
                                        female
                                        </label>
                                        <label for="others">
                                        <input type="radio" {{ $crud_model->gender == "others"?'checked':"" }} value="others" id="others" name="gender">
                                            others
                                        </label>
                                </div>
            
                                <div class="form-group mb-3">
                                    <label for="">image</label>
                                    <input type="file" name="image"  class="form-control">
                                    <img src="/{{$crud_model->image}}" height="100px" width="100px" alt="">
                                </div>
                                <button>Submit</button>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
            
        @endif
        

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
                                @foreach($hobbies as $item) 
                                  <label for="gardining{{ $item->id}}">
                                    <input type="checkbox" value="{{ $item->id}}" id="gardining{{ $item->id}}" name="hobby[]">
                                       {{ $item->title}}
                                    </label>
                                @endforeach
                                     
                                </div>
                                <div class="form-group mb-3">
                                    <label>Gender::</label>
                                      <label for="male">
                                        <input type="radio" value="male" id="male" name="gender">
                                          male
                                      </label>
                                      <label for="female">
                                        <input type="radio" value="female" id="female" name="gender">
                                        female
                                      </label>
                                      <label for="others">
                                        <input type="radio"  value="others" id="others" name="gender">
                                          others
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
                                            <th>Description</th>
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
                                                <td>{{ $item->Description }}</td>
                                                <td>{{ $item->user_roles->title??'' }}</td>
                                                <td>
                                                 @if ($item->hobbies->count())
                                                    <ol>
                                                        @foreach ( $item->hobbies as $hobby)
                                                      
                                                           <li>{{ $hobby->title }}</li>
                                                        @endforeach
                                        
                                                    </ol>
                                                 @endif
                                                </td>
                                                <td>
                                                    <img src="/{{ $item->image }}" height="100px" width="100px" alt="">
                                                  
                                                </td>
                                                <td>{{ $item->gender }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info">show</a>
                                                    <a href="/crud/edit/{{ $item->id }}?edit_form=jj" class="btn btn-sm btn-warning mx-2">edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger">delete</a>
                                                </td>
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

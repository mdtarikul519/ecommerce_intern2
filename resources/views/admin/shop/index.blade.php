

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
         
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>Fruites Name</th>
                                            <th>Description</th>
                                            <th>image</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                                     <tbody>
                                          @foreach ($data as $item)
                                        
                                             <tr>
                                                <td>{{ $item->shop_name }}</td>
                                                <td>

                                                  @if($item->fruites)
                                                    <ol>
                                                        @foreach ($item->fruites as $fruite )
                                                        <li>{{ $fruite->fruites_name }}</li>
                                                        @endforeach
                                                    </ol>
                                                  @endif
                                             </td>
                                                <td>{{ $item->discription??'' }}</td>
                                                
                                                <td>
                                                    <img src="/{{ $item->image }}" height="100px" width="100px" alt="">
                                                  
                                                </td>
                                                <td>{{ $item->Fruites_name }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info">show</a>
                                                    <a href="{{ route('dashboard.shop.edit',$item->id) }}" class="btn btn-sm btn-warning mx-2">edit</a>
                                                    <a href="{{ route('dashboard.shop.destroy',$item->id) }}" class="btn btn-sm btn-danger">delete</a>
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

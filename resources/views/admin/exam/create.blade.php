@extends('admin.layout.dashboard_layout') @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Studented managment</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Studented Template</a></li>
                            <li class="breadcrumb-item active">Studented managment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('dashboard.exam.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                            <h2>Studented Create</h2>
                            <a href="{{ route('dashboard.studented.index') }}" class="btn btn-outline-info"> <i
                                    class="fa fa-arrow-left">Back</i></a>
                        </div>
                        <div class="card-body">

                            <div class="from-group col-md-6">
                                <label for="">Exam_subject</label>
                                <input value="" type="text" name="exam_subject" class="form-control" />
                                @error('name')
                                    <div class="text-danger">{{ $name }}</div>
                                @enderror
                            </div>

                            <div class="from-group col-md-6">
                                <label for="">Department</label>
                                <select class="form-control" name="department">
                                    @foreach ($all_data as $item)
                                        <option value="{{ $item->id }}">{{ $item->department }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="from-group col-md-6">
                                <label for="">Stduent_name</label>
                                <input value="" type="text" name="student_name" class="form-control" />
                    
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

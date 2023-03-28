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

                {{-- <form action="" method="POST" enctype="multipart/form-data">
                 @csrf

                 <div class="card">
                    <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                        <h2>Studented Create</h2>
                        <a href="{{ route('dashboard.studented.index') }}" class="btn btn-outline-info"> <i
                                class="fa fa-arrow-left">Back</i></a>
                    </div>
                    <div class="card_body">
                         <div class="form-group col-md-6">
                            level

                         </div>
                    </div>

                 </div>

             </form> --}}

                <form action="{{ route('dashboard.exam.update', $editdata->id) }}" method="POST"
                    enctype="multipart/form-data">
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
                                <input value="{{ $editdata->exam_name }}" type="text" name="exam_name"
                                    class="form-control" />
                                @error('name')
                                    <div class="text-danger">{{ $name }}</div>
                                @enderror
                            </div>

                            <div class="from-group col-md-6">
                                <label for="">Department</label>
                                <select class="form-control" name="department">
                                    @foreach ($all_data as $item)
                                        <option {{ $editdata->department == $item->id ? 'selected' : '' }}
                                            value="{{ $item->id }}">{{ $item->department }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-6">
                                <label>Student name:</label>
                                @foreach ($data as $item)
                                    <label for="exam{{ $item->id }}">
                                        <input
                                            {{ $editdata->examstudentd->firstwhere('id', '=', $item->id) ? 'checked' : '' }}
                                            type="checkbox" value="{{ $item->id }}" id="exam{{ $item->id }}"
                                            name="student_name[]">
                                        {{ $item->name }}
                                    </label>
                                @endforeach

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

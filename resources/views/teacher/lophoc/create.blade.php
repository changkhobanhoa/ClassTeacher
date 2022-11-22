@extends('layouts.teacher')
@section('title')
    Teacher
@endsection
@section('content')
    <div class="main-panel">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
            </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Thêm lớp</h4>
                            
                            <form class="forms-sample" action="{{ route('teacher.lophoc.store') }}">
                                <div class="form-group">
                                    <label for="class">Tên Lớp Học Phần</label>
                                    <input type="text" class="form-control" id="class"
                                        placeholder="Username" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="code">Mã Học Phần</label>
                                    <input type="text" class="form-control" id="code" name="code" placeholder="Mã HP">
                                </div>
                                <div class="form-group">
                                    <label for="soluong">Số lượng sinh viên</label>
                                    <input type="number" min="1"  max=40 class="form-control" id="soluong"
                                        placeholder="Số lượng" name="soluong">
                                </div>
                                <div class="form-group">
                                    <label for="day">Ngày Thi</label>
                                    <input type="date" class="form-control" id="day"
                                        name="ngaythi">
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

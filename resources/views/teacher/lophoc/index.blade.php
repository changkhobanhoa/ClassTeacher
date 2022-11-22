@extends('layouts.teacher')
@section('title')
    Teacher
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    b5-col
                </div>
                <div class="col-md-2">
                    <a name="" id="" class="btn btn-primary" href="{{ route('teacher.lophoc.create') }}"
                        role="button">Thêm</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-dark table-responsive-md">
                <thead class="thead-light">
                    <tr>
                        <th class="column-title hidden-xs">#</th>
                        <th>Giáo Viên</th>
                        <th>Tên Lớp Học Phần</th>
                        <th>Ngay Hoc</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $d->getGiaoVien($d->id) }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->ngaythi }}</td>
                            <td>
                            <a href="{{ route('teacher.lophoc.chitietsv',['id'=>$d->id]) }}">
                          <i  class="mdi mdi-account-edit" >
                          </i>
                          </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

    <script>
        $('.toast').toast({})
    </script>
@endsection

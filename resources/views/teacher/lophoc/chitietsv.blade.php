@extends('layouts.teacher')
@section('title')
    Teacher
@endsection
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách sinh viên</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    User
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Amount
                                </th>
                                <th>
                                    Deadline
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td class="py-1">
                                        <img src="../../images/faces/face1.jpg" alt="image" />
                                    </td>
                                    <td>
                                      {{ $d->getStudent($d->sv_id)->name }}
                                    </td>
                                    <td>
                                        {{ $d->getStudent($d->sv_id)->email }}
                                    </td>
                                    <td>
                                       2
                                    </td>
                                    <td>
                                        May 15, 2015
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

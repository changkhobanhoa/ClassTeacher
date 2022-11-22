@extends('layouts.student')
@section('title')
    Danh sách
@endsection
@section('content')
    <div class="card">
        <div class="card-header ">
            <div class="row">
                <div class="col-md-10">
                    b5-col
                </div>
                <div class="col-md-2">
                    <div class="d-grid gap-2">
                        <button type="button" name="" id="" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalId">Nhập mã lớp</button>
                    </div>
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
                        <th>Ngày học </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $d )
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{    $d->getGiaovien($d->giaovien_id) }}</td>
                        <td>{{  $d->getLop($d->id)->name }}</td>
                        <td>{{  $d->getLop($d->id)->ngaythi }}</td>
                    </tr>
                @endforeach
                    
                </tbody>

            </table>
        </div>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Nhập mã Lớp Học</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="forms-sample" action="{{ route('student.create') }}">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="code">Mã Lớp Học</label>
                                <input type="text" class="form-control" id="code" placeholder="Mã" name="code">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Kiểm Tra</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="toast-container position-static">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="source" class="rounded me-2" alt="Bootstrap">
                <strong class="me-auto">Bootstrap</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                See? Just like this.
            </div>
        </div>

        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="source" class="rounded me-2" alt="Bootstrap 2">
                <strong class="me-auto">Bootstrap 2</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Heads up, toasts will stack automatically
            </div>
        </div>
    </div>

    <script>
        var modalId = document.getElementById('modalId');

        modalId.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
        document.getElementById("toastbtn").onclick = function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl)
            })
            toastList.forEach(toast => toast.show())
        }
    </script>
@endsection

@extends('layouts.app-admin')
@section('styles')
    @parent
@endsection
<!-- Content -->
@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between mx-auto">
                        <h4 class="breadcrumb-wrapper mb-4">Data Pengguna</h4>
                        <a href="{{ route('user.create') }}" class="btn btn-primary"><i
                                class='bx bxs-user-plus'></i>&nbsp;Tambah Pengguna</a>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <div class="card-datatable pt-0">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Waktu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Referral, conversion, impression & income charts -->
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('user.list') }}",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center',
                        orderable: false,
                        searchable: false
                    }, {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'waktu',
                        name: 'waktu'
                    },
                    {
                        data: 'aksi',
                        name: 'aksi'
                    }
                ]
            });
            $.fn.dataTable.ext.errMode = function(settings, helpPage, message) {
                console.log(message);
            };
        })
    </script>
@endsection
<!-- / Content -->

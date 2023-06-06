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
@push('modals')
    <div class="modal modal-top fade" id="showedit" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12 text-center">
                        <div class="spinner-border spinner-border-lg text-secondary" role="status">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endpush
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
            $('#showedit').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget);
                var modal = $(this);
                modal.find('.modal-body').empty()
                modal.find('.modal-body').html(
                    '<div class="col-12 text-center"><div class="spinner-border spinner-border-lg text-secondary" role="status"></div></div>'
                )
                modal.find('.modal-body').load(button.data("remote"));
            });

        })
    </script>
@endsection
<!-- / Content -->

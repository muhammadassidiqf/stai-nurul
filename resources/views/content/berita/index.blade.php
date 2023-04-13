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
                        <h4 class="breadcrumb-wrapper mb-4">Data Berita</h4>
                        <a href="{{ route('berita.create') }}" class="btn btn-primary"><i
                                class='bx bxs-add-to-queue'></i>&nbsp;Tambah Berita</a>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <div class="card-datatable pt-0">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Kategori</th>
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
                    url: "{{ route('berita.list') }}",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center',
                        orderable: false,
                        searchable: false
                    }, {
                        data: 'judul',
                        name: 'judul'
                    },
                    {
                        data: 'isi',
                        name: 'isi'
                    },
                    {
                        data: 'kategori',
                        name: 'kategori'
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

@extends('layouts.app-admin')
<!-- Content -->
@section('content-admin')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <h5 class="card-header">Tambah Dosen</h5>
                <div class="card-body">
                    <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Dosen</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="basic-default-name"
                                    placeholder="Nama Dosen">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Jabatan Fungsional</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan" id="basic-default-name"
                                    placeholder="Jabatan Fungsional">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Bidang Keilmuan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keahlian" id="basic-default-name"
                                    placeholder="Bidang Keilmuan Studi">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Prodi</label>
                            <div class="col-sm-10">
                                <select name="prodi" id="prodi" class="form-control" required>
                                    <option value=""></option>
                                    @foreach ($prodi as $p)
                                        <option value="{{ $p->id }}">{{ $p->prodi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Studi</label>
                            <div class="col-sm-10">
                                <div class="row field">
                                    <div class="col-sm-4">
                                        <select name="strata[]" id="strata" class="form-control" required>
                                            <option value=""></option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="studi[]"
                                                    id="basic-default-name" placeholder="Studi yang sudah di selesaikan">
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-md btn-primary float-end add-studi"><i
                                                        class='bx bx-plus'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Upload Gambar Profil</label>
                            <div class="col-sm-10">
                                <input type="file" name="file_gambar" class="form-control" id="inputGroupFile01">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Referral, conversion, impression & income charts -->
    <input type="hidden" id="text" value="1" />
    </div>
@endsection
<!-- / Content -->
@section('scripts')
    @parent
    <script>
        $("#prodi").select2({
            theme: "bootstrap-5",
            placeholder: "Pilih Salah Satu",
        });
        $("#strata").select2({
            theme: "bootstrap-5",
            placeholder: "Pilih Salah Satu",
        });
        $(document).ready(function() {
            var a = 0;
            $(".add-studi").click(function() {
                var textBox = document.getElementById("text");
                textBox.value = a;
                a++;
                var fieldHTML =
                    '<div class="row mt-2 field"><div class="col-sm-4"><select name="strata[]" class="form-control" id="strata' +
                    a +
                    '" required><option value=""></option><option value="S1">S1</option><option value="S2">S2</option><option value="S3">S3</option></select></div><div class="col-sm-8"><div class="row"><div class="col-sm-10"><input type="text" class="form-control" name="studi[]" id="basic-default-name" placeholder="Studi yang sudah di selesaikan"></div><div class="col-sm-2"><button type="button" class="btn btn-md btn-danger float-end remove-studi"><i class="bx bx-minus"></i></button></div></div></div></div>';
                $('body').find('.field:last').after(fieldHTML);

                $('#strata' + a + '').select2({
                    theme: "bootstrap-5",
                    placeholder: "Pilih Salah Satu",
                });
            });
            $("body").on("click", ".remove-studi", function() {
                $(this).parents(".field").remove();
            });
            var vals = [];
            $("input[name='studi[]']").each(function() {
                vals.push($(this).val());
            });
            var values = $("input[name='studi[]']")
                .map(function() {
                    console.log($(this).val());
                }).get();
        })
    </script>
@endsection

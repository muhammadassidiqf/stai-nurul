<form class="row g-3">
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Nama</label>
        <div class="col-sm-10">
            <label for="title">
                {{ $dosen->nama }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Jabatan Fungsional</label>
        <div class="col-sm-10">
            <label for="Isi">
                {{ $dosen->jabatan }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Bidang Keilmuan</label>
        <div class="col-sm-10">
            <label for="Isi">
                {{ $dosen->keahlian }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Program Studi</label>
        <div class="col-sm-10">
            <label for="Isi">
                {{ $dosen->prodi->prodi }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Studi</label>
        <div class="col-sm-10">
            @foreach ($studi as $i => $s)
                <div class="row">
                    <label for="Isi">
                        {{ $s }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Gambar</label>
        <div class="col-sm-10">
            <img src="{{ asset('storage/img/dosen/' . $dosen->gambar) }}" width="140" height="150"
                class="border rounded-start" alt="View Image">
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
            Cancel
        </button>
    </div>
</form>

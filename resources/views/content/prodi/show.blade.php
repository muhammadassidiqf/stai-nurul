<form class="row g-3">
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Prodi</label>
        <div class="col-sm-10">
            <label for="title">
                {{ $prodi->prodi }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Deskripsi Prodi</label>
        <div class="col-sm-10">
            <label for="Isi">
                {!! $prodi->isi !!}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Gambar</label>
        <div class="col-sm-10">
            <img src="{{ asset('storage/img/prodi/' . $prodi->gambar) }}" width="140" height="150"
                class="rounded-start" alt="View Sales">
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
            Cancel
        </button>
    </div>
</form>

<form class="row g-3">
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Judul</label>
        <div class="col-sm-10">
            <label for="title">
                {{ $news->judul }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Isi Berita</label>
        <div class="col-sm-10">
            <label for="Isi">
                {!! $news->isi !!}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Kategori</label>
        <div class="col-sm-10">
            <label for="category">
                {{ $news->kategori }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Gambar</label>
        <div class="col-sm-10">
            <img src="{{ asset('storage/img/berita/' . $news->gambar) }}" width="140" height="150"
                class="rounded-start" alt="View Sales">
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
            Cancel
        </button>
    </div>
</form>

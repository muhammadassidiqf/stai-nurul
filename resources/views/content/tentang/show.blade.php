<form class="row g-3">
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Isi Tentang</label>
        <div class="col-sm-10">
            <label for="Isi">
                {!! $data->isi !!}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Editor</label>
        <div class="col-sm-10">
            <label for="editor">
                {{ $data->user->name }}
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2" for="basic-default-title">Status</label>
        <div class="col-sm-10">
            <label for="status">
                @if ($data->status == 1)
                    <div class="d-flex align-items-center lh-1 me-3 mb-3 mb-sm-0">
                        <span class="badge badge-dot bg-success me-1"></span> Active
                    </div>
                @else
                    <div class="d-flex align-items-center lh-1 me-3 mb-3 mb-sm-0">
                        <span class="badge badge-dot bg-danger me-1"></span> Not Active
                    </div>
                @endif
            </label>
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
            Cancel
        </button>
    </div>
</form>

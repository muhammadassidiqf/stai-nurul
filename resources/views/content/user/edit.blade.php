<style>
    .cursor-pointer {
        cursor: pointer !important;
    }
</style>
<form class="row g-3" action="{{ route('user.update', encrypt($data->id)) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-12">
        <label class="form-label" for="collapsible-fullname">Nama</label>
        <input type="text" name="name" class="form-control" value="{{ $data->name }}" disabled>
    </div>
    <div class="col-12">
        <label class="form-label" for="collapsible-fullname">Username</label>
        <input type="text" name="username" class="form-control" value="{{ $data->username }}">
    </div>
    <div class="col-12 form-password-toggle">
        <label class="form-label" for="collapsible-fullname">New Password</label>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
    </div>
    <div class="col-12 form-password-toggle">
        <label class="form-label" for="collapsible-fullname">New Password Confirmation</label>
        <div class="input-group input-group-merge">
            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password_confirmation" />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
            Cancel
        </button>
    </div>
</form>

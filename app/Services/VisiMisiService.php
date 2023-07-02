<?php

namespace App\Services;

use App\Models\User;
use App\Models\VisiMisi;
use Carbon\Carbon;

class VisiMisiService
{
    protected User $user;
    protected VisiMisi $visimisi;

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    function datatable()
    {
        $data = VisiMisi::with(['user'])->get();
        if (request()->ajax()) {
            return datatables()::of($data)
                ->addIndexColumn()
                ->editColumn('isi', function ($data) {
                    $string = strip_tags($data->isi);
                    if (strlen($string) > 100) {

                        // truncate string
                        $stringCut = substr($string, 0, 100);
                        $endPoint = strrpos($stringCut, ' ');

                        //if the string doesn't contain any space then it will cut without word basis.
                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                        $string .= '...';
                    }
                    return $string;
                })
                ->editColumn('status', function ($data) {
                    $status = '<div class="d-flex align-items-center lh-1 me-3 mb-3 mb-sm-0">
                    <span class="badge badge-dot bg-danger me-1"></span> Not Active
                  </div>';
                    if ($data->status == '1') {
                        $status = '<div class="d-flex align-items-center lh-1 me-3 mb-3 mb-sm-0">
                        <span class="badge badge-dot bg-success me-1"></span> Active
                      </div>';
                    }
                    return $status;
                })
                ->editColumn('user', function ($data) {
                    return $data->user->name;
                })
                ->editColumn('waktu', function ($data) {
                    return Carbon::parse($data->created_at)->translatedFormat('d F Y');
                })
                ->editColumn('aksi', function ($data) {
                    $url = route('visi-misi.show', encrypt($data->id));
                    $edit = route('visi-misi.edit', encrypt($data->id));
                    return '<div class="text-center">
                    <button class="btn btn-primary btn-sm detail" type="button" data-bs-toggle="modal" data-bs-target="#showdetail" data-remote="' . $url . '">
                    <i class="bx bx-show"></i></button>
                    <button class="btn btn-warning btn-sm detail" type="button" data-bs-toggle="modal" data-bs-target="#showedit" data-remote="' . $edit . '">
                    <i class="bx bx-edit" ></i></button>
                    </div>';
                })
                ->rawColumns(['aksi', 'status'])
                ->make(true);
        }
    }

    function store(array $data)
    {
        VisiMisi::where('status', '=', 1)->update(['status' => 0]);

        $ins = VisiMisi::create([
            'user_id' => $this->user->id,
            'isi' => $data['isi'],
            'status' => $data['status']
        ]);

        return $ins;
    }

    function update(array $data, $id)
    {
        $active = VisiMisi::where('status', '=', 1);
        if ($data['status'] == "1" && $active->count() > 0) {
            $active->update(['status' => 0]);
        }
        $upd = VisiMisi::where('id', '=', decrypt($id))->update([
            'user_id' => $this->user->id,
            'isi' => $data['isi'],
            'status' => $data['status']
        ]);
        return $upd;
    }
}

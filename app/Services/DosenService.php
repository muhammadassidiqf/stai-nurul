<?php

namespace App\Services;

use App\Models\User;
use App\Models\Dosen;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;

class DosenService
{
    protected User $user;
    protected Dosen $dosen;

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
        $data = Dosen::with(['user', 'prodi'])->get();
        if (request()->ajax()) {
            return datatables()::of($data)
                ->addIndexColumn()
                ->editColumn('nama', function ($data) {
                    return $data->nama;
                })
                ->editColumn('jabatan', function ($data) {
                    return $data->jabatan;
                })
                ->editColumn('keahlian', function ($data) {
                    return $data->keahlian;
                })
                ->editColumn('prodi', function ($data) {
                    return $data->prodi->prodi;
                })
                ->editColumn('waktu', function ($data) {
                    return Carbon::parse($data->created_at)->translatedFormat('d F Y');
                })
                ->editColumn('aksi', function ($data) {
                    $url = route('dosen.show', encrypt($data->id));
                    $edit = route('dosen.edit', encrypt($data->id));
                    return '<div class="text-center">
                <button class="btn btn-primary btn-sm detail" type="button" data-bs-toggle="modal" data-bs-target="#showdetail" data-remote="' . $url . '">
                <i class="bx bx-show"></i></button>
                <button class="btn btn-warning btn-sm detail" type="button" data-bs-toggle="modal" data-bs-target="#showedit" data-remote="' . $edit . '">
                <i class="bx bx-edit" ></i></button>
                </div>';
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    function store(array $data)
    {
        $file = $data['file_gambar'];
        $file_name = $file->getClientOriginalName();
        $file_name = preg_replace('!\s+!', ' ', $file_name);
        $file_name = str_replace(' ', '_', $file_name);
        $file_name = str_replace('%', '', $file_name);
        $file_name = pathinfo($file_name, PATHINFO_FILENAME) . '-' . time() . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
        $file->move(public_path("storage/img/dosen/"), $file_name);
        $arr_studi = [];
        foreach ($data['studi'] as $i => $s) {
            array_push($arr_studi, $data['strata'][$i] . ' ' . $s);
        }
        $studi = implode(',', $arr_studi);
        $ins = Dosen::create([
            'user_id' => $this->user->id,
            'prodi_id' => $data['prodi'],
            'nama' => $data['nama'],
            'jabatan' => $data['jabatan'],
            'keahlian' => $data['keahlian'],
            'studi' => $studi,
            'gambar' => $file_name
        ]);
        return $ins;
    }

    function update(array $data, $id)
    {
        $res = Prodi::where('id', decrypt($id));
        $prodi = $res->first();
        if (array_key_exists('file_gambar', $data)) {
            $file = $data['file_gambar'];
            $file_name = $file->getClientOriginalName();
            $file_name = preg_replace('!\s+!', ' ', $file_name);
            $file_name = str_replace(' ', '_', $file_name);
            $file_name = str_replace('%', '', $file_name);
            $file_name = pathinfo($file_name, PATHINFO_FILENAME) . '-' . time() . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
            $path = public_path("storage/img/prodi/" . $prodi->gambar);
            if (file_exists($path)) {
                unlink($path);
                $file->move(public_path("storage/img/prodi/"), $file_name);
            } else {
                $file->move(public_path("storage/img/prodi/"), $file_name);
            }
        } else {
            $file_name = $prodi->gambar;
        }
        $res->update([
            'user_id' => $this->user->id,
            'prodi' => $data['prodi'],
            'isi' => $data['isi'],
            'gambar' => $file_name,
            'slug' => Str::slug($data['prodi'])
        ]);
        return $data;
    }
}

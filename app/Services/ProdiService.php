<?php

namespace App\Services;

use App\Models\User;
use App\Models\Prodi;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;

class ProdiService
{
    protected User $user;
    protected Prodi $prodi;

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
        $data = Prodi::with(['user'])->get();
        if (request()->ajax()) {
            return datatables()::of($data)
                ->addIndexColumn()
                ->editColumn('prodi', function ($data) {
                    return $data->prodi;
                })
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
                ->editColumn('waktu', function ($data) {
                    return Carbon::parse($data->created_at)->translatedFormat('d F Y');
                })
                ->editColumn('aksi', function ($data) {
                    $url = route('prodi.show', encrypt($data->id));
                    $edit = route('prodi.edit', encrypt($data->id));
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
        $file->move(public_path("storage/img/prodi/"), $file_name);
        $ins = Prodi::create([
            'user_id' => $this->user->id,
            'prodi' => $data['prodi'],
            'isi' => $data['isi'],
            'gambar' => $file_name,
            'slug' => Str::slug($data['prodi'])
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

<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.visi-misi.index');
    }

    public function list()
    {
        $data = VisiMisi::with(['user'])->get();
        if (request()->ajax()) {
            return Datatables::of($data)
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.visi-misi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'isi' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('visi-misi.create')->with('error', 'Data Visi Misi belum lengkap');
        }
        if ($request->status == "1") {
            VisiMisi::where('status', '=', 1)->update(['status' => 0]);
        }
        $ins = VisiMisi::create([
            'user_id' => auth()->user()->id,
            'isi' => $request->isi,
            'status' => $request->status
        ]);
        if ($ins) {
            return redirect()->route('visi-misi.index')->with('success', 'Visi Misi Berhasil ditambahkan');
        }
        return redirect()->route('visi-misi.create')->with('error', 'Visi Misi Gagal ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = VisiMisi::with(['user'])->where('id', decrypt($id))->first();
        return view('content.visi-misi.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = VisiMisi::with(['user'])->where('id', decrypt($id))->first();
        return view('content.visi-misi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'isi' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('visi-misi.index')->with('error', 'Data Visi Misi belum lengkap');
        }
        $active = VisiMisi::where('status', '=', 1);
        if ($request->status == "1" && !!$active->get()) {
            $active->update(['status' => 0]);
        } else if ($request->status == "0" && !!$active->where('id', '=', decrypt($id))->get()) {
            return redirect()->route('visi-misi.index')->with('error', 'Data Visi Misi Tidak ada yang active!');
        }
        $upd = VisiMisi::where('id', '=', decrypt($id))->update([
            'user_id' => auth()->user()->id,
            'isi' => $request->isi,
            'status' => $request->status
        ]);
        if ($upd) {
            return redirect()->route('visi-misi.index')->with('success', 'Visi Misi Berhasil diubah');
        }
        return redirect()->route('visi-misi.index')->with('error', 'Visi Misi Gagal diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

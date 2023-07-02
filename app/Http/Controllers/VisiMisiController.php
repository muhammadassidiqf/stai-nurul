<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisiMisiRequest;
use App\Models\VisiMisi;
use App\Services\VisiMisiService;
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

    public function list(VisiMisiService $visimisi)
    {
        $visimisi->setUser(auth()->user());
        return $visimisi->datatable();
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
    public function store(VisiMisiRequest $request, VisiMisiService $visiMisiService)
    {
        $data = $request->validated();

        try {
            $active = VisiMisi::where('status', '=', 1);
            if ($data['status'] == "0" && $active->count() == 0)
                return redirect()->route('visi-misi.create')->with('error', 'Data Visi Misi Tidak ada yang Aktif');
            $visiMisiService->setUser(auth()->user())->store($data);
            return redirect()->route('visi-misi.index')->with('success', 'Data Visi Misi Berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('visi-misi.create')->with('error', 'Data Visi Misi Gagal ditambahkan');
        }
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
    public function update(VisiMisiRequest $request, VisiMisiService $visiMisiService, $id)
    {
        $data = $request->validated();

        try {
            $active = VisiMisi::where('status', '=', 1);
            if ($data['status'] == "0" && !!$active->where('id', '=', decrypt($id))->get())
                return redirect()->route('visi-misi.index')->with('error', 'Data Visi Misi Tidak ada yang Aktif!');
            $upd =  $visiMisiService->setUser(auth()->user())->update($data, $id);
            return redirect()->route('visi-misi.index')->with('success', 'Data Visi Misi Berhasil diubah');
        } catch (\Throwable $e) {
            return redirect()->route('visi-misi.index')->with('success', 'Data Visi Misi Gagal diubah');
        }
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

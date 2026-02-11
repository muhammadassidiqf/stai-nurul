<?php

namespace App\Http\Controllers;

use App\Http\Requests\DosenRequest;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Services\DosenService;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.dosen.index');
    }

    function list(DosenService $dosen)
    {
        $dosen->setUser(auth()->user());
        return $dosen->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = Prodi::get();
        return view('content.dosen.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DosenRequest $request, DosenService $dosen)
    {
        $data = $request->validated();
        try {
            $check_nama = Dosen::where('nama', 'LIKE', "%{$data['nama']}%")->first();
            if ($check_nama)
                return redirect()->route('dosen.create')->with('error', "Dosen sudah ada");
            $dosen->setUser(auth()->user())->store($data);
            return redirect()->route('dosen.index')->with('success', "Data Dosen berhasil ditambahkan!");
        } catch (\Throwable $e) {
            return redirect()->route('dosen.index')->with('error', "Data Dosen gagal ditambahkan!");
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
        $dosen = Dosen::with(['user', 'prodi'])->where('id', decrypt($id))->first();
        $studi = [];
        if (!empty($dosen->studi)) {
            $studi = explode(',', $dosen->studi);
        }
        return view('content.dosen.show', compact('dosen', 'studi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

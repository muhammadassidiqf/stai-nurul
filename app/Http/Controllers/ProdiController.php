<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdiRequest;
use App\Models\Prodi;
use App\Services\ProdiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.prodi.index');
    }

    function list(ProdiService $prodi)
    {
        $prodi->setUser(auth()->user());
        return $prodi->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdiRequest $request, ProdiService $prodi)
    {
        $data = $request->validated();
        try {
            $slug = Prodi::where('slug', Str::slug($data['prodi']))->first();
            if ($slug)
                return redirect()->route('prodi.create')->with('error', "Prodi sudah ada");
            $prodi->setUser(auth()->user())->store($data);
            return redirect()->route('prodi.index')->with('success', "Data Prodi berhasil ditambahkan!");
        } catch (\Throwable $e) {
            return redirect()->route('prodi.index')->with('error', "Data Prodi gagal ditambahkan!");
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
        $prodi = Prodi::where('id', decrypt($id))->first();
        return view('content.prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = Prodi::where('id', decrypt($id))->first();
        return view('content.prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdiRequest $request, ProdiService $prodiService, $id)
    {
        // $data['prodi'] = $request->prodi;
        // $data['isi'] = $request->isi;
        Log::info("ProdiController::update() dipanggil dengan id terenkripsi: " . $id);

        try {
            $decryptedId = decrypt($id);
            Log::info("ID berhasil didekripsi: " . $decryptedId);
        } catch (\Throwable $e) {
            Log::error("Gagal dekripsi ID: " . $e->getMessage());
            return redirect()->route('prodi.index')->with('error', "ID tidak valid");
        }

        Log::info("Mengubah data Prodi dengan id " . $decryptedId);
        $data = $request->validated();
        try {
            $slug = Prodi::where('slug', Str::slug($data['prodi']))->where('id', '<>', $decryptedId)->first();
            if ($slug) {
                Log::error("Prodi sudah ada dengan nama " . $data['prodi']);
                return redirect()->route('prodi.index')->with('error', "Prodi sudah ada");
            }
            Log::info("Mengubah data Prodi dengan nama " . $data['prodi']);
            $prodiService->setUser(auth()->user())->update($data, $id);
            Log::info("Data Prodi berhasil diubah dengan nama " . $data['prodi']);
            return redirect()->route('prodi.index')->with('success', 'Data Prodi Berhasil diubah');
        } catch (\Throwable $e) {
            Log::error("Error saat mengubah data Prodi: " . $e->getMessage());
            return redirect()->route('prodi.index')->with('error', "Data Prodi gagal diubah!");
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

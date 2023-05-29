<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.berita.index');
    }

    public function list()
    {
        $data = Berita::get(['id', 'judul', 'isi', 'kategori', 'created_at']);
        if (request()->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('judul', function ($data) {
                    return $data->judul;
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
                ->editColumn('kategori', function ($data) {
                    return $data->kategori;
                })
                ->editColumn('waktu', function ($data) {
                    return Carbon::parse($data->created_at)->translatedFormat('d F Y');
                })
                ->editColumn('aksi', function ($data) {
                    $url = route('admin.berita.show', encrypt($data->id));
                    $edit = route('admin.berita.edit', encrypt($data->id));
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.berita.create');
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
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'file_gambar' => [
                'required',
                'image'
            ]
        ]);
        if ($validator->fails()) {
            return redirect()->route('berita.create')->with('error', 'Berita Gagal ditambahkan');
        }
        $user = Session::get('data');
        $slug = Berita::where('slug', Str::slug($request->judul))->first();
        if ($slug) {
            return redirect()->back()->with('error', "Judul sudah ada");
        }
        $file = $request->file('file_gambar');
        $file_name = $file->getClientOriginalName();
        $file_name = preg_replace('!\s+!', ' ', $file_name);
        $file_name = str_replace(' ', '_', $file_name);
        $file_name = str_replace('%', '', $file_name);
        $file_name = pathinfo($file_name, PATHINFO_FILENAME) . '-' . time() . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
        $file->move(public_path("storage/img/berita/"), $file_name);
        Berita::create([
            'user_id' => $user->id,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategori' => $request->kategori,
            'gambar' => $file_name,
            'slug' => Str::slug($request->judul)
        ]);
        return redirect()->back()->with('success', "Berita berhasil ditambahkan!");
    }

    public function show($id)
    {
        $news = Berita::where('id', decrypt($id))->first();
        return view('content.berita.show', compact('news'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = Berita::where('id', decrypt($id))->first();
        return view('content.berita.edit', compact('news'));
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
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'file_gambar' => [
                'required',
                'image'
            ]
        ]);
        $user = Session::get('data');
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Berita Gagal diubah!');
        }
        $file = $request->file('file_gambar');
        $file_name = $file->getClientOriginalName();
        $file_name = preg_replace('!\s+!', ' ', $file_name);
        $file_name = str_replace(' ', '_', $file_name);
        $file_name = str_replace('%', '', $file_name);
        $file_name = pathinfo($file_name, PATHINFO_FILENAME) . '-' . time() . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
        $data = Berita::where('id', decrypt($id));
        $news = $data->first();
        $path = public_path("storage/img/berita/" . $news->gambar);
        if (File::exists($path)) {
            File::delete($path);
            $file->move(public_path("storage/img/berita/"), $file_name);
        } else {
            $file->move(public_path("storage/img/berita/"), $file_name);
        }
        $data->update([
            'user_id' => $user->id,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'kategori' => $request->kategori,
            'gambar' => $file_name,
            'slug' => Str::slug($request->judul)
        ]);
        return redirect()->route('berita.index')->with('success', "Berita berhasil diubah!");
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

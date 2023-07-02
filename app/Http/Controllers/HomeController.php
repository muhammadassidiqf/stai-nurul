<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Prodi;
use App\Models\Sejarah;
use App\Models\Tentang;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        $tentang = Tentang::where('status', 1)->first();
        return view('content.content-home', compact('news', 'prodi', 'tentang'));
    }

    public function news()
    {
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-news', compact('prodi'));
    }

    public function about()
    {
        $data = Tentang::where('status', '1')->first();
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-about', compact('data', 'prodi'));
    }

    public function profile()
    {
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-profile', compact('prodi'));
    }

    public function students()
    {
        $news = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-students', compact('news', 'prodi'));
    }

    public function history()
    {
        $data = Sejarah::where('status', '1')->first();
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-history', compact('data', 'prodi'));
    }

    public function visi_misi()
    {
        $data = VisiMisi::where('status', '1')->first();
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-visi', compact('data', 'prodi'));
    }

    public function academic($id)
    {
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        $data = Prodi::where('slug', $id)->first();
        return view('content.content-academic', compact('prodi', 'data'));
    }

    public function struktur_organisasi()
    {
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-so', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function newsbySlug($slug)
    {
        $data = Berita::where('slug', $slug);
        $news = $data->first();
        $count = $news->count != null ? (int)$news->count : 0;
        $data->update([
            'count' =>  $count + 1
        ]);
        $popular = Berita::orderBy('created_at', 'desc')->orderBy('count', 'desc')->limit(4)->get();
        $prodi = Prodi::orderBy('created_at', 'desc')->get();
        return view('content.content-news', compact('news', 'popular', 'prodi'));
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

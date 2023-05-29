<?php

namespace App\Http\Controllers;

use App\Models\Berita;
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
        return view('content.content-home', compact('news'));
    }

    public function news()
    {
        return view('content.content-news');
    }

    public function about()
    {
        return view('content.content-about');
    }

    public function profile()
    {
        return view('content.content-profile');
    }

    public function students()
    {
        $news = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        return view('content.content-students', compact('news'));
    }

    public function history()
    {
        return view('content.content-history');
    }

    public function visi_misi()
    {
        return view('content.content-visi');
    }

    public function academic()
    {
        return view('content.content-academic');
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
        $data->update([
            'count' => (int)$news->count + 1
        ]);
        $popular = Berita::orderBy('created_at', 'desc')->orderBy('count', 'desc')->limit(4)->get();
        return view('content.content-news', compact('news', 'popular'));
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

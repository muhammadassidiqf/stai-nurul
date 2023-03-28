<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::get('login') == true) {
            // return view('home');
            return redirect()->route('admin');
        } else {
            return view('content.auth');
        }
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
        $request->validate([
            'username' => 'required|min:5',
            'password' => 'required|min:6',
        ]);
        try {

            $res = User::where('username', $request->username)->first();
            if (isset($res)) {
                if (password_verify($request->password, $res->password)) {
                    Session::put('data', $res);
                    Session::put('login', true);
                    return Session::has('url.intended') ? redirect()->to(Session::get('url.intended')) : redirect()->route('admin.dashboard');
                } else {
                    return redirect()->back();
                }
            } else {
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan! Silakan coba lagi.');
        }
    }

    public function store_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);
        // dd($request->all());
        try {

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password,
            ]);

            return redirect('/admin')->with('success', "Account successfully registered.");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan! Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('content.register');
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
        Session::flush();
        return redirect()->route('login');
    }
}

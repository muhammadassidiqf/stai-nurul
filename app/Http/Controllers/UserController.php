<?php

namespace App\Http\Controllers;

use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.user.index');
    }

    public function list()
    {
        $data =  User::get(['id', 'name', 'username', 'created_at']);
        if (request()->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($data) {
                    return $data->name;
                })
                ->editColumn('isi', function ($data) {
                    return $data->username;
                })
                ->editColumn('waktu', function ($data) {
                    return Carbon::parse($data->created_at)->translatedFormat('d F Y');
                })
                ->editColumn('aksi', function ($data) {
                    $edit = route('user.edit', encrypt($data->id));
                    return '<div class="text-center">
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
        return view('content.user.create');
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
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Terjadi kesalahan! Silakan coba lagi.');
        }
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return redirect()->route('user.index')->with('success', "Account successfully registered.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', decrypt($id))->first();
        return view('content.user.edit', compact('data'));
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
            'username' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Terjadi kesalahan! Silakan coba lagi.');
        }
        $check = User::where('username', $request->username)->where('id', decrypt($id))->first();
        if ($check) {
            $check->update([
                'username' => $request->username,
                'password' => $request->password,
            ]);
            return redirect()->route('user.index')->with('success', "Data User berhasil diubah.");
        }
        $check = User::where('username', $request->username)->first();
        if ($check)
            return redirect()->route('user.index')->with('error', 'Username sudah tersedia! Silakan coba lagi.');
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

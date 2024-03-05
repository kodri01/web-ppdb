<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = 'Data Admin';
        $title = 'Data Admin';
        $admin = User::orderBy('id')->get();
        return view('pages.admin.index', compact('judul', 'title', 'admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = 'Tambah Admin';
        $title = 'Data Admin';
        return view('pages.admin.add', compact('judul', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ];

        $messages = [
            'name.required' => 'Nama Lengkap Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Alamat Email Sudah terdaftar',
            'password.required' => 'Password Wajib Diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin')->with('success', 'Admin berhasil ditambahkan');
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
        $judul = 'Tambah Admin';
        $title = 'Data Admin';
        $admin = User::find($id);
        return view('pages.admin.edit', compact('judul', 'title', 'admin'));
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


        $get = User::find($id);

        if (empty($request->password)) {
            $password = $get->password;
        } else {
            $password = Hash::make($request->password);
        }

        $admin = User::find($id);
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password
        ]);
        return redirect()->route('admin')->with('success', 'Data Admin berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin')
            ->with('error', 'Data Admin berhasil dihapus');
    }
}

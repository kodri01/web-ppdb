<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Providers\SiswaUserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
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
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        $title = 'Login Admin';
        return view('pages/admin/login', compact('title'));
    }

    public function siswa()
    {

        $title = 'Login Siswa';
        return view('pages/siswa/login', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string'
        ];

        $messages = [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.string'   => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('login');
        }
    }

    public function login_siswa(Request $request)
    {
        $rules = [
            'no_register' => 'required',
            'tgl_lahir' => 'required'
        ];

        $messages = [
            'no_register.required' => 'Nomor Register wajib diisi',
            'tgl_lahir.required' => 'Tanggal Lahir wajib diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $no_register = $request->input('no_register');
        $tgl_lahir = $request->input('tgl_lahir');

        // Cek apakah data siswa dengan nomor register dan tanggal lahir yang sesuai ada di dalam tabel siswa
        $siswa = Siswa::where('no_register', $no_register)->where('tgl_lahir', $tgl_lahir)->first();

        if ($siswa) {
            // Jika data ditemukan, redirect ke halaman dashboard.
            session(['siswa' => $siswa]);
            return redirect()->route('dashboard.siswa');
        } else {
            // Jika data tidak ditemukan, kembali ke halaman siswa.login dengan pesan error
            Session::flash('error', 'Periksa Kembali No Register Anda');
            return redirect()->route('siswa.login');
        }
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
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }

    public function logout_siswa()
    {
        session()->forget('siswa');
        return redirect()->route('siswa.login');
    }
}

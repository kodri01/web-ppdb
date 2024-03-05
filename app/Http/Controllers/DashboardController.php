<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }

    public function dashboard()
    {
        $judul = 'Dashboard';
        $title = 'Dashboard Admin';
        $siswaDaftar = Siswa::count();
        $siswaLolos = Siswa::where('status', 1)->count();
        $siswaGagal = Siswa::whereNotNull('alasan')->count();
        $siswaBaru = Siswa::where('status_siswa', 'Siswa Baru')->count();
        $siswaPindahan = Siswa::where('status_siswa', 'Siswa Pindahan')->count();
        return view('pages.admin.dashboard', compact('judul', 'title', 'siswaLolos', 'siswaGagal', 'siswaDaftar', 'siswaBaru', 'siswaPindahan'));
    }

    public function dashboard_siswa()
    {
        $judul = 'Selamat Datang';
        $title = 'Dashboard Siswa';
        $siswa = session('siswa');
        $bayar = Pembayaran::where('id_siswa', $siswa->id)->get();

        return view('pages.siswa.dashboard', compact('judul', 'title', 'siswa', 'bayar'));
    }

    public function print_noregist()
    {
        $title = 'Registrasi Ulang';
        $siswa = session('siswa');
        $pdf = Pdf::loadView('pages.siswa.print_noregist', compact('title', 'siswa'))->setPaper('A4', 'portrait');
        return $pdf->download('bukti register ' . $siswa->nama_lengkap . date(' d F Y') . '.pdf');
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
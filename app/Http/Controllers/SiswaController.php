<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Siswa';
        $judul = 'Data Siswa Baru';
        $siswa = Siswa::orderBy('no_register', 'ASC')->get();
        return view('pages.siswa.index', compact('judul', 'title', 'siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Siswa';
        $judul = 'Tambah Data Siswa';
        return view('pages.siswa.add', compact('judul', 'title'));
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
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'name' => 'required',
            'tempat_lahir' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'dusun' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'no_telp' => 'required',
            'saudara_kandung' => 'required',
            'tbadan' => 'required',
            'bbadan' => 'required',
            'zonasi' => 'required',
            'waktu_tempuh' => 'required',
            'nama_ayah' => 'required',
            'pend_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pendapatan_ayah' => 'required',
            'nama_ibu' => 'required',
            'pend_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'pendapatan_ibu' => 'required',
        ];

        $messages = [
            'nama_sekolah.required'  => 'Nama Sekolah Wajib Diisi',
            'alamat_sekolah.required'  => 'Alamat Sekolah Wajib Diisi',
            'name.required' => 'Nama Lengkap Wajib Diisi',
            'tempat_lahir.required' => 'Tempat Lahir Wajib Diisi',
            'rt.required' => 'RT Wajib Diisi',
            'rw.required' => 'RW Wajib Diisi',
            'dusun.required' => 'Nama Dusun Wajib Diisi',
            'kelurahan.required' => 'Nama Kelurahan Wajib Diisi',
            'kecamatan.required' => 'Nama Kecamatan Wajib Diisi',
            'kabupaten.required' => 'Nama Kabupaten Wajib Diisi',
            'no_telp.required' => 'Nomor Handphone Wajib Diisi',
            'saudara_kandung.required' => 'Jumlah Saudara Kandung Wajib Diisi',
            'tbadan.required' => 'Tinggi Badan Wajib Diisi',
            'bbadan.required' => 'Berat Badan Wajib Diisi',
            'zonasi.required' => 'Jarak Tempuh Wajib Diisi',
            'waktu_tempuh.required' => 'Waktu Tempuh Wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah Wajib Diisi',
            'pend_ayah.required' => 'Pendidikan Terakhir Ayah Wajib Diisi',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah Wajib Diisi',
            'pendapatan_ayah.required' => 'Pendapatan Ayah Wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu Wajib Diisi',
            'pend_ibu.required' => 'Pendidikan Terakhir Ibu Wajib Diisi',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu Wajib Diisi',
            'pendapatan_ibu.required' => 'Pendapatan Ibu Wajib Diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mendapatkan tahun dan bulan saat ini
        $year = date('Y');
        $month = date('m');

        // Mendapatkan urutan pendaftaran berdasarkan jumlah siswa pada bulan ini
        $count = Siswa::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->count();

        // Menambahkan nol di depan urutan jika jumlahnya kurang dari 10
        $countFormatted = str_pad($count + 1, 2, '0', STR_PAD_LEFT);

        // Membentuk nomor register dengan format tahun+bulan+urutan
        $noRegister = $year . $month . $countFormatted;

        Siswa::create([
            'no_register' => $noRegister,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'nama_lengkap' => $request->name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'keb_khusus' => $request->keb_khusus,
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'dusun' => $request->dusun,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'no_telp' => $request->no_telp,
            'tempat_tinggal' => $request->tempat_tinggal,
            'moda_transport' => $request->moda_transport,
            'kewarganegaraan' => $request->kewarganegaraan,
            'nama_ayah' => $request->nama_ayah,
            'tgl_lahir_ayah' => $request->tgl_lahir_ayah,
            'pend_ayah' => $request->pend_ayah,
            'pekerja_ayah' => $request->pekerjaan_ayah,
            'gaji_ayah' => $request->pendapatan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'tgl_lahir_ibu' => $request->tgl_lahir_ibu,
            'pend_ibu' => $request->pend_ibu,
            'pekerja_ibu' => $request->pekerjaan_ibu,
            'gaji_ibu' => $request->pendapatan_ibu,
            'tbadan' => $request->tbadan,
            'bbadan' => $request->bbadan,
            'zonasi' => $request->zonasi,
            'waktu_tempuh' => $request->waktu_tempuh,
            'waktu_tempuh' => $request->waktu_tempuh,
            'jml_saudara' => $request->saudara_kandung,
            'status' => 0,
        ]);
        return redirect()->route('data.siswa')->with('success', 'Data Siswa Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Details Siswa';
        $judul = 'Details Baru';
        $siswa = Siswa::find($id);
        return view('pages.siswa.show', compact('judul', 'title', 'siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $siswa = Siswa::find($id);
        $siswa->update([
            'status' => 1,
        ]);
        return redirect()->route('data.siswa')->with('success', 'Siswa berhasil diseleksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect()->route('data.siswa')
            ->with('error', 'Data Siswa berhasil dihapus');
    }
}

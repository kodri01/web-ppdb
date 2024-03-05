<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Register Siswa';
        $judul = 'REGISTRASI SISWA';
        return view('pages/siswa/register', compact('title', 'judul'));
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
        $rules = [
            'status_siswa' => 'required',
            'name' => 'required',
            'call_name' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'saudara_kandung' => 'required',
            'bahasa' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'gol_darah' => 'required',
            'penyakit' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'tempat_tinggal' => 'required',
            'zonasi' => 'required',
            'nama_ayah' => 'required',
            'pend_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'pend_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'wali_murid' => 'required',
            'hub_kel' => 'required',
            'pend_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'profile'      => 'required',
            // 'kk'      => 'required',
            // 'akte'      => 'required',
            // 'ijazah_tk'      => 'required',
        ];

        $messages = [

            'status_siswa.required'  => 'Status Siswa Wajib dipilih',
            'name.required' => 'Nama Lengkap Wajib Diisi',
            'call_name.required' => 'Nama Panggilan Wajib Diisi',
            'jk.required' => 'Jenis Kelamin Wajid Diisi',
            'tempat_lahir.required' => 'Tempat Lahir Wajib Diisi',
            'tgl_lahir.required' => 'Tanggal Lahir Wajid Diisi',
            'agama.required' => 'Agama Wajid Diisi',
            'kewarganegaraan.required' => 'Kewarganegaraan Wajid Diisi',
            'saudara_kandung.required' => 'Jumlah Saudara Kandung Wajib Diisi',
            'bahasa.required' => 'Bahasa sehari-hari Wajib Diisi',
            'berat_badan.required' => 'Berat Badan Wajib Diisi',
            'tinggi_badan.required' => 'Tinggi Badan Wajib Diisi',
            'gol_darah.required' => 'Golongan Darah Wajib Diisi',
            'penyakit.required' => 'Golongan Darah Wajib Diisi',
            'alamat.required' => 'Golongan Darah Wajib Diisi',
            'no_telp.required' => 'Nomor Handphone Wajib Diisi',
            'tempat_tinggal.required' => 'Jarak Tempuh Wajib Diisi',
            'zonasi.required' => 'Jarak Tempuh Wajib Diisi',
            'nama_ayah.required' => 'Nama Ayah Wajib Diisi',
            'pend_ayah.required' => 'Pendidikan Terakhir Ayah Wajib Diisi',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah Wajib Diisi',
            'nama_ibu.required' => 'Nama Ibu Wajib Diisi',
            'pend_ibu.required' => 'Pendidikan Terakhir Ibu Wajib Diisi',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu Wajib Diisi',

            'profile.required'  => 'Pas Foto wajib diupload',

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

        $namefile = str_replace(' ', '_', $request->profile->getClientOriginalName());
        $filename  = $namefile . '_' . time() . '.' . $request->profile->extension();
        $request->profile->move(public_path('uploads'), $filename);

        $namefile1 = str_replace(' ', '_', $request->kk->getClientOriginalName());
        $filename1  = $namefile1 . '_' . time() . '.' . $request->kk->extension();
        $request->kk->move(public_path('uploads'), $filename1);

        $namefile2 = str_replace(' ', '_', $request->akte->getClientOriginalName());
        $filename2  = $namefile2 . '_' . time() . '.' . $request->akte->extension();
        $request->akte->move(public_path('uploads'), $filename2);

        $namefile3 = str_replace(' ', '_', $request->ijazah_tk->getClientOriginalName());
        $filename3  = $namefile3 . '_' . time() . '.' . $request->ijazah_tk->extension();
        $request->ijazah_tk->move(public_path('uploads'), $filename3);

        $siswa = Siswa::create([
            'no_register' => $noRegister,
            'status_siswa' => $request->status_siswa,
            'asal_siswa' => $request->asal_siswa,
            'nama_tk' => $request->nama_tk,
            'alamat_tk' => $request->alamat_tk,
            'tgl_sttb' => $request->tgl_sttb,
            'no_sttb' => $request->no_sttb,
            'sekolah_asal' => $request->sekolah_asal,
            'alamat_sekolah' => $request->alamat_sekolah,
            'dari_kelas' => $request->dari_kelas,
            'tgl_terima' => $request->tgl_terima,
            'di_kelas' => $request->di_kelas,
            'nama_lengkap' => $request->name,
            'nama_panggilan' => $request->call_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'kewarganegaraan' => $request->kewarganegaraan,
            'saudara_kandung' => $request->saudara_kandung,
            'bahasa' => $request->bahasa,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'gol_darah' => $request->gol_darah,
            'penyakit' => $request->penyakit,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'tempat_tinggal' => $request->tempat_tinggal,
            'zonasi' => $request->zonasi,
            'nama_ayah' => $request->nama_ayah,
            'pend_ayah' => $request->pend_ayah,
            'pekerja_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pend_ibu' => $request->pend_ibu,
            'pekerja_ibu' => $request->pekerjaan_ibu,
            'wali_murid' => $request->wali_murid,
            'hub_kel' => $request->hub_kel,
            'pend_wali' => $request->pend_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'profile' => $filename,
            'kk' => $filename1,
            'akte' => $filename2,
            'ijazah_tk' => $filename3,
            'status' => 0,
        ]);
        session(['siswa' => $siswa]);
        return redirect()->route('siswa.login');
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
<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
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
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'keb_khusus' => 'required',
            'tempat_tinggal' => 'required',
            'kewarganegaraan' => 'required',
            'moda_transport' => 'required',
            'tgl_lahir_ayah' => 'required',
            'pendapatan_ayah' => 'required',
            'tgl_lahir_ibu' => 'required',
            'pendapatan_ibu' => 'required',
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
            'jk.required' => 'Jenis Kelamin Wajid Diisi',
            'tgl_lahir.required' => 'Tanggal Lahir Wajid Diisi',
            'alamat.required' => 'Alamat Wajid Diisi',
            'agama.required' => 'Agama Wajid Diisi',
            'keb_khusus.required' => 'Kebutuhan Khusus Wajid Diisi',
            'tempat_tinggal.required' => 'Tempat Tinggal Wajid Diisi',
            'kewarganegaraan.required' => 'Kewarganegaraan Wajid Diisi',
            'moda_transport.required' => 'Moda Transportasi Wajid Diisi',
            'tgl_lahir_ayah.required' => 'Tanggal Lahir Ayah Wajid Diisi',
            'tgl_lahir_ibu.required' => 'Tanggal Lahir Ibu Wajid Diisi',
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
        $bayar = Pembayaran::where('id_siswa', $siswa->id)->first();
        return view('pages.siswa.show', compact('judul', 'title', 'siswa', 'bayar'));
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
        session()->forget('siswa');
        $siswa = Siswa::find($id);
        session(['siswa' => $siswa]);
        return redirect()->route('data.siswa')->with('success', 'Siswa berhasil diseleksi');
    }

    public function siswa_tolak($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update([
            'alasan' => $request->alasan,
        ]);
        session()->forget('siswa');
        $siswa = Siswa::find($id);
        session(['siswa' => $siswa]);
        return redirect()->route('data.siswa')->with('success', 'Penolakan Siswa Tersimpan');
    }

    public function regist_terima($id)
    {
        $siswa = Siswa::find($id);
        $siswa->update([
            'regist_status' => 1,
        ]);
        session()->forget('siswa');
        $siswa = Siswa::find($id);
        session(['siswa' => $siswa]);
        return redirect()->route('data.siswa')->with('success', 'Registrasi Ulang Diterima');
    }

    public function regist_tolak($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update([
            'regist_alasan' => $request->alasan,
        ]);
        session()->forget('siswa');
        $siswa = Siswa::find($id);
        session(['siswa' => $siswa]);
        return redirect()->route('data.siswa')->with('success', 'Penolakan Registrasi Ulang Tersimpan');
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

    public function bayar($id)
    {
        $siswa = Siswa::find($id);
        $bayar = Pembayaran::where('id_siswa', $siswa->id)->get();
        $data = session('siswa');
        $title = 'Pembayaran';
        $judul = 'Selamat Datang';
        return view('pages.siswa.bayar', compact('judul', 'title',  'siswa', 'data', 'bayar'));
    }

    public function add_bayar($id, Request $request)
    {
        $rules = [
            'tgl_tf' => 'required',
            'rek_bank' => 'required',
            'nominal' => 'required',
            'bukti_tf' => 'required',
        ];

        $messages = [
            'tgl_tf.required'  => 'Tanggal transfer wajib diisi',
            'rek_bank.required'  => 'Nomor Rekening wajib dipilih',
            'nominal.required' => 'Nominal Transfer wajib diisi',
            'bukti_tf.required' => 'Bukti pembayaran wajib diupload',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $siswa = Siswa::find($id);
        $namefile3 = str_replace(' ', '_', $request->bukti_tf->getClientOriginalName());
        $filename3  = $namefile3 . '_' . time() . '.' . $request->bukti_tf->extension();
        $request->bukti_tf->move(public_path('uploads'), $filename3);

        Pembayaran::create([
            'id_siswa' => $id,
            'tgl_tf' => $request->tgl_tf,
            'rek_bank' => $request->rek_bank,
            'nominal' => $request->nominal,
            'bukti_tf' => $filename3,
        ]);
        session()->forget('siswa');
        $siswa = Siswa::find($id);
        session(['siswa' => $siswa]);
        return redirect()->route('dashboard.siswa')->with('success', 'Pembayaran Berhasil');
    }

    public function registrasi_ulang($id)
    {
        $siswa = Siswa::find($id);
        $data = session('siswa');
        $title = 'Registrasi Ulang';
        $judul = 'Selamat Datang';
        return view('pages.siswa.regist_ulang', compact('judul', 'title',  'siswa', 'data'));
    }

    public function add_regist(Request $request, $id)
    {
        $rules = [
            // 'profile' => 'required',
            // 'kk' => 'required',
            // 'akte' => 'required',
            // 'ijazah_tk' => 'required',
            'file_regist' => 'required|mimes:pdf|max:5120'
        ];

        $messages = [
            'file_regist.required'  => 'File Registrasi Ulang wajib diupload',
            'file_regist.max'  => 'Ukuran File Maximal 5MB',
            'file_regist.mimes'  => 'File dalam bentuk PDF',
            // 'profile.required'  => 'Photo profile wajib diupload',
            // 'kk.required'  => 'File KK Wajib Diupload',
            // 'akte.required' => 'File AKTE Wajib Diupload',
            // 'ijazah_tk.required' => 'File Ijazah Wajib Diupload',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $siswa = Siswa::find($id);

        // $namefile = str_replace(' ', '_', $request->profile->getClientOriginalName());
        // $filename  = $namefile . '_' . time() . '.' . $request->profile->extension();
        // $request->profile->move(public_path('uploads'), $filename);

        // $namefile1 = str_replace(' ', '_', $request->kk->getClientOriginalName());
        // $filename1  = $namefile1 . '_' . time() . '.' . $request->kk->extension();
        // $request->kk->move(public_path('uploads'), $filename1);

        // $namefile2 = str_replace(' ', '_', $request->akte->getClientOriginalName());
        // $filename2  = $namefile2 . '_' . time() . '.' . $request->akte->extension();
        // $request->akte->move(public_path('uploads'), $filename2);

        // $namefile4 = str_replace(' ', '_', $request->ijazah_tk->getClientOriginalName());
        // $filename4  = $namefile4 . '_' . time() . '.' . $request->ijazah_tk->extension();
        // $request->ijazah_tk->move(public_path('uploads'), $filename4);

        $filename5 = str_replace(' ', '_', $request->file_regist->getClientOriginalName());

        $request->file_regist->move(public_path('uploads'), $filename5);

        // $file = $request->file('file_regist');
        // $fileName5 = time() . '_' . $file->getClientOriginalName();
        // $file->move(public_path('uploads'), $fileName5);

        $siswa->update([
            // 'profile' => $filename,
            // 'kk' => $filename1,
            // 'akte' => $filename2,
            // 'ijazah_tk' => $filename4,
            'file_regist' => $filename5,
            'regist_status' => null,
            'regist_alasan' => null,
        ]);
        session()->forget('siswa');

        // Set ulang sesi 'siswa' dengan data yang sudah diupdate
        session(['siswa' => $siswa]);

        $siswaBayar = Siswa::with('pembayaran')->find($id);

        if ($siswaBayar->pembayaran === null) {
            return redirect()->route('bayar.siswa', $siswaBayar->id)->with('success', 'Registrasi Ulang Berhasil');
        } else {
            return redirect()->route('dashboard.siswa')->with('success', 'Registrasi Ulang Berhasil');
        }
    }
}
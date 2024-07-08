@extends('layouts.siswa_main')
@section('content')


    <section class="section">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
        @if ($siswa->status == 1 && $siswa->alasan == null && $siswa->file_regist == null)
            <div class="section-header">
                <h1>Hallo, {{ $siswa->nama_lengkap }} </h1>
            </div>
            <div class="card text-center text-white bg-success">
                <h2 class="card-header">-- Hasil Seleksi --</h2>
                <div class="card-body">
                    <h3 class="card-title">Selamat, {{ $siswa->nama_lengkap }}</h3>
                    <h5 class="card-text">Kamu dinyatakan <strong>LULUS</strong> dalam seleksi <strong>Penerimaan
                            Peserta Didik Baru (PPDB)</strong> Sekolah Dasar Pelita Raya Kota Jambi.</h5>
                    <h5>Segera lakukan <strong>REGISTRASI ULANG</strong> dan melengkapi berkas-berkasnya.</h5>
                </div>
            </div>
        @elseif ($siswa->status == 1 && $siswa->alasan == null && $siswa->file_regist != null)
            @if ($siswa->regist_status == 0 && $siswa->regist_alasan != null)
                <div class="section-header">
                    <h1>{{ $judul }}, {{ $siswa->nama_lengkap }} </h1>
                </div>
                <div class="card text-center text-white bg-danger">
                    <h2 class="card-header">-- Pembayaran Informasi --</h2>
                    <div class="card-body">
                        <h5 class="card-text">Maaf {{ $siswa->nama_lengkap }}, Pembayaran Kamu
                            <strong>DITOLAK,</strong>
                            <strong class="text-uppercase">{{ $siswa->regist_alasan }}.</strong><br> Silahkan
                            Lakukan Upload Pembayaran Ulang Pada Link <a href="{{ route('edit_bayar.siswa', $siswa->id) }}"
                                class="text-info"> Berikut
                                ini</a>
                        </h5>
                    </div>
                </div>
            @elseif($siswa->regist_status == 0 && $siswa->regist_alasan == null)
                <div class="section-header">
                    <h1>Hallo, {{ $siswa->nama_lengkap }} </h1>
                </div>
                <div class="card text-center text-white bg-warning">
                    <h2 class="card-header">-- Pembayaran Informasi --</h2>
                    <div class="card-body">
                        <h3 class="card-title">Proses Pembayaran Kamu Sedang Dilakukan Pengecekan Oleh Pihak Panitia
                        </h3>
                        <h5 class="card-text">Mohon tunggu <strong>INFORMASI</strong> berikutnya dari Panitia
                            <strong>Penerimaan
                                Peserta Didik Baru (PPDB)</strong>
                        </h5>
                        <h5>Sekolah Dasar Pelita Raya Kota Jambi
                        </h5>
                    </div>
                </div>
            @else
                <div class="section-header">
                    <h1>Hallo, {{ $siswa->nama_lengkap }} </h1>
                </div>
                <div class="card text-center text-white bg-primary">
                    <h2 class="card-header">-- Informasi --</h2>
                    <div class="card-body">
                        <h3 class="card-title"> <strong class="text-uppercase">{{ $siswa->nama_lengkap }}</strong>, Terima
                            Kasih Sudah Melakukan Registrasi Ulang dan Pembayaran</h3>
                        <h5>Sampai jumpa kembali di Sekolah

                        </h5>
                    </div>
                </div>
            @endif
        @elseif ($siswa->status == 0 && $siswa->alasan != null)
            <div class="section-header">
                <h1>{{ $judul }}, {{ $siswa->nama_lengkap }} </h1>
            </div>
            <div class="card text-center text-white bg-danger">
                <h2 class="card-header">-- Informasi --</h2>
                <div class="card-body">
                    <h5 class="card-text">Maaf {{ $siswa->nama_lengkap }}, Kamu <strong>TIDAK LULUS ADMINISTRASI,</strong>
                        <strong class="text-uppercase">{{ $siswa->alasan }}.</strong> Untuk Memperbaikinya Kamu
                        Dapat Klik Tombol Ubah Di Bawah ini
                    </h5>
                </div>
            </div>
            <center>
                <a href="{{ route('edit.siswa', $siswa->id) }}" class="btn btn-lg btn-primary"><i class="fas fa-pen"></i>
                    Ubah Data</a>
            </center>
        @elseif ($siswa->status == 0)
            <div class="section-header">
                <h1>{{ $judul }}, {{ $siswa->nama_lengkap }} </h1>
            </div>
            <div class="card text-center text-white bg-warning">
                <h2 class="card-header">-- Informasi --</h2>
                <div class="card-body">
                    <h5 class="card-text">Mohon menunggu <strong>INFORMASI</strong> dari Panitia <strong>Penerimaan
                            Peserta Didik Baru (PPDB)</strong> </h5>
                    <h5>Sekolah Dasar Pelita Raya Kota Jambi. Silahkan untuk Mendownload Nomor Registrasi Kamu <a
                            href="{{ route('save_pdf') }}">disini</a>
                    </h5>
                </div>
            </div>
        @endif


        </div>
    </section>
@endSection;

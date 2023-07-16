@extends('layouts.siswa_main')
@section('content')
    <section class="section">


        @if ($siswa->status == 1)
            <div class="section-header">
                <h1>Hallo, {{ $siswa->nama_lengkap }} </h1>
            </div>
            <div class="card text-center text-white bg-success">
                <h2 class="card-header">-- Hasil Seleksi --</h2>
                <div class="card-body">
                    <h3 class="card-title">Selamat, {{ $siswa->nama_lengkap }}</h3>
                    <h5 class="card-text">Kamu dinyatakan <strong>LULUS</strong> dalam seleksi <strong>Penerimaan
                            Peserta Didik Baru (PPDB)</strong> Sekolah Dasar Negeri 205/IV Kota Jambi.</h5>
                    <h5>Segera lakukan <strong>PENDAFTARAN ULANG</strong> dan melengkapi berkas-berkasnya.</h5>
                </div>
            </div>
        @else
            <div class="section-header">
                <h1>{{ $judul }}, {{ $siswa->nama_lengkap }} </h1>
            </div>
            <div class="card text-center text-white bg-warning">
                <h2 class="card-header">-- Informasi --</h2>
                <div class="card-body">
                    <h3 class="card-title">Data Kamu Sudah Terkirim!</h3>
                    <h5 class="card-text">Mohon menunggu <strong>INFORMASI</strong> dari Panitia <strong>Penerimaan
                            Peserta Didik Baru (PPDB)</strong> </h5>
                    <h5>Sekolah Dasar Negeri 205/IV Kota Jambi. Untuk melihat hasil seleksi, </h5>
                    <h5>Kamu dapat Login Kembali dengan <u><strong>Nomor Register :
                                {{ $siswa->no_register }}</strong></u> dan <strong>Tanggal Lahir</strong></h5>
                </div>
            </div>
        @endif


        </div>
    </section>
@endSection;

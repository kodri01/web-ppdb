@extends('layouts.main')

@section('content')
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch" data-background="{{ url('assets/img/log.jpg') }}">
                <div class="col-lg-4 col-md-6 col-sm-12 order-lg-1 min-vh-100 order-2">
                    <div class="p-4 m-3">
                        <img src="{{ url('assets/img/avatar/icone.png') }}" alt="logo" width="80"
                            class="shadow-light mb-5 mt-2">
                        <h4 class="text-dark  font-weight-normal">Selamat datang di <br><span class="font-weight-bold">PPDB
                                PELITA RAYA
                                Kota Jambi</span>
                        </h4>
                        <p class="text-black" style="color: black">Sebelum Anda memulai, Anda harus masuk atau mendaftar
                            jika Anda
                            belum
                            memiliki akun.</p>

                        @if (session()->has('siswa'))
                            @php
                                $siswa = session('siswa');
                            @endphp

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hallo {{ $siswa->nama_lengkap }},</strong> Untuk login ke akun kamu, kamu dapat
                                menggunakan <strong class="text-uppercase"><u>Nomor Register :
                                        {{ $siswa->no_register }}</u></strong>
                                dan <strong class="text-uppercase"><u>Tanggal Lahir :
                                        {{ date('d/m/Y', strtotime($siswa->tgl_lahir)) }}</u></strong>
                                pada
                                login di bawah ini
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

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



                        <form method="POST" action="{{ route('siswa.loggin') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nisn">Nomor Register</label>
                                <input type="number" class="form-control @error('no_register') is-invalid @enderror"
                                    name="no_register" placeholder="Masukan Nomor Register">
                                @error('no_register')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                                </div>
                                <input id="tanggal_lahir" type="date"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir">
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group text-right">
                                <a href="{{ route('/') }}" class="float-left mt-3">
                                    <i class="fa fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" name="loginDataPeserta"
                                    class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                    Login
                                </button>
                            </div>
                            <div class="mt-5 text-center" style="color: black">
                                Belum punya akun? <a href="{{ route('siswa.register') }}">Daftar</a>
                            </div>
                        </form>

                        <center>
                            <div class="container">
                                <div class="copyright">
                                    &copy; <strong><span>Universitas Dinamika Bangsa</span></strong> |
                                    {{ \Carbon\Carbon::now()->year }}
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
        </section>
    </div>

    <script>
        $(document).ready(function() {
            // Menggunakan event click pada tombol close
            $('.btn-close').on('click', function() {
                // Melakukan AJAX request untuk menghapus sesi
                $.ajax({
                    url: '/hapus-sesi', // Ganti dengan URL endpoint yang sesuai
                    method: 'GET', // Sesuaikan dengan metode yang digunakan di backend
                    success: function(response) {
                        // Jika penghapusan sesi berhasil, reload halaman
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Tangani kesalahan jika terjadi
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endSection;

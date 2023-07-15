@extends('layouts.main')

@section('content')
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                        <h4 class="text-dark text-center font-weight-normal">Selamat datang di <br><span
                                class="font-weight-bold">PPDB SDN 11
                                Kota Jambi</span>
                        </h4>
                        <p class="text-muted">Sebelum Anda memulai, Anda harus masuk atau mendaftar jika Anda belum
                            memiliki akun.</p>

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
                                <input id="nisn" type="number" class="form-control" name="no_register" tabindex="1"
                                    autofocus>

                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                                </div>
                                <input id="tanggal_lahir" type="date" class="form-control" name="tgl_lahir"
                                    tabindex="2">

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
                            <div class="mt-5 text-center">
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
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="{{ url('assets/img/log.png') }}">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class=" pb-3">
                                <h1 class="mt-2 display-4 font-weight-bold">Selamat Datang Peserta Didik Baru</h1>
                                {{-- <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endSection;

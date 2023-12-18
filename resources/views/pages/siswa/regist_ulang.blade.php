@extends('layouts.siswa_main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="section-title mb-4">Informasi Data Siswa</div>
                            <!-- Tambah Data -->
                            <form action="{{ route('add_regist.siswa', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nomor Registrasi </label>
                                        <input type="text"
                                            class="form-control @error('no_register') is-invalid @enderror"
                                            name="no_register" value="{{ $data->no_register }}" disabled>
                                        @error('no_register')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" placeholder="Nama Lengkap" disabled
                                            value="{{ $data->nama_lengkap }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Status Siswa </label>
                                        <input type="text"
                                            class="form-control @error('status_siswa') is-invalid @enderror"
                                            name="status_siswa" placeholder="Nama Lengkap" disabled
                                            value="{{ $data->status_siswa }}">
                                        @error('status_siswa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="section-title mt-5 mb-4">Kelengkapan Berkas Penunjang</div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="file">Pas Photo <i class="fa fa-solid fa-star-of-life fa-xs"
                                                    style="color: red"></i></label>
                                            <input type="file"
                                                class="form-control @error('profile') is-invalid @enderror" name="profile">
                                            @error('profile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="file">Ijazah TK <i class="fa fa-solid fa-star-of-life fa-xs"
                                                    style="color: red"></i></label>
                                            <input type="file"
                                                class="form-control @error('ijazah_tk') is-invalid @enderror"
                                                name="ijazah_tk">
                                            @error('ijazah_tk')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="file">File Akte <i class="fa fa-solid fa-star-of-life fa-xs"
                                                    style="color: red"></i></label>
                                            <input type="file" class="form-control @error('akte') is-invalid @enderror"
                                                name="akte">
                                            @error('akte')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="file">File KK <i class="fa fa-solid fa-star-of-life fa-xs"
                                                    style="color: red"></i></label>
                                            <input type="file" class="form-control @error('kk') is-invalid @enderror"
                                                name="kk">
                                            @error('kk')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <br>
                                    <div class="modal-footer bg-whitesmoke br">
                                        <a href="{{ route('/') }}" type="button" class="btn btn-secondary">Batal</a>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </div>

                            </form>
                            <!-- penutup Tambah Data -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endSection;

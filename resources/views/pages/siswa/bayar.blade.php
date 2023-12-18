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
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('regist.siswa', $data->id) }}">Registrasi
                                            Ulang</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                                </ol>
                            </nav>
                            <div class="section-title mb-4">Informasi Data Bank YAYASAN</div>
                            <!-- Tambah Data -->
                            <form action="{{ route('add_bayar.siswa', $data->id) }}" method="POST"
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
                                        <label>Tanggal Transfer</label>
                                        <input type="date" class="form-control @error('tgl_tf') is-invalid @enderror"
                                            name="tgl_tf">
                                        @error('tgl_tf')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Transfer Ke Bank<i class="fa fa-solid fa-star-of-life fa-xs"
                                                style="color: red"></i></label>
                                        <select name="rek_bank" id="rek_bank" class="form-control">
                                            <option value="">- Pilih Rekening Tujuan -</option>
                                            <option value="BRI 2277-01-1242-53-7">BRI a.n YAYASAN PELITA RAYA
                                                2277-01-1242-53-7
                                            </option>
                                            <option value="MANDIRI 110-00-0001054-3">MANDIRI a.n YAYASAN PELITA RAYA
                                                110-00-0001054-3
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nominal Transfer</label>
                                        <input type="text" class="form-control @error('nominal') is-invalid @enderror"
                                            name="nominal">
                                        @error('nominal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="file">Bukti Pembayaran <i class="fa fa-solid fa-star-of-life fa-xs"
                                                style="color: red"></i></label>
                                        <input type="file" class="form-control @error('bukti_tf') is-invalid @enderror"
                                            name="bukti_tf">
                                        @error('bukti_tf')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="modal-footer bg-whitesmoke br">
                                        <a href="{{ route('/') }}" type="button" class="btn btn-secondary">Batal</a>
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                            </form>
                            <!-- penutup Tambah Data -->
                        </div>
                        {{-- @else
                            <div class="card text-center text-white bg-success">
                                <h2 class="card-header">-- Informasi --</h2>
                                <div class="card-body">
                                    <h3 class="card-title">{{ $data->nama_lengkap }}, Terima Kasih Sudah Melakukan
                                        Pembayaran Pada Tanggal {{ date('d F Y', strtotime($bayar[0]->tgl_tf)) }}</h3>


                                </div>
                            </div>
                            <div class="">
                                <label for="">

                                </label>
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endSection;

@extends('layouts.main')

@section('content')
    <style>
        .main-content {
            padding-left: 30px;
        }

        .navbar {
            left: 30px;
        }
    </style>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li>
                            <img src="{{ url('assets/img/avatar/icone.png') }}" alt="LP" width="50px">
                        </li>
                        <div class="ml-3">
                            <h4 class="text-white mt-2"><strong>FORMULIR PENDAFTARAN PPDB PELITA RAYA KOTA JAMBI</strong>
                            </h4>
                        </div>

                    </ul>
                </form>

            </nav>
            <!-- Main Content -->
            <div class="main-content">



                <!-- Isinya -->

                <section class="section">
                    <div class="section-header">
                        <h1>{{ $judul }}</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <h4>Basic DataTables</h4> -->
                                        <a href="{{ route('/') }}" type="button"
                                            class="btn btn-primary daterange-btn icon-left btn-icon">
                                            <i class="fas fa-arrow-left"></i> Halaman Utama
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="section-title mt-0 ml-4">Informasi Asal Sekolah</div>

                                        <!-- Form Tambah Data Siswa -->
                                        <form action="{{ route('siswa.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group">
                                                            <label>Status Siswa<i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <select name="status_siswa" id="status_siswa"
                                                                class="form-control">
                                                                <option value="">- Pilih Status Siswa-</option>
                                                                <option value="Siswa Baru">Siswa Baru</option>
                                                                {{-- <option value="Siswa Pindahan">Siswa Pindahan</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div id="siswa_baru_form" class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Asal Siswa <i
                                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                                            style="color: red"></i></label>
                                                                    <select name="asal_siswa" id="asal_siswa"
                                                                        class="form-control  @error('asal_siswa') is-invalid @enderror"
                                                                        value="{{ old('asal_siswa') }}">
                                                                        <option value="">- Pilih Asal Siswa -</option>
                                                                        <option value="Non-TK">Non-TK</option>
                                                                        <option value="TK">Taman Kanak-Kanak</option>
                                                                    </select>
                                                                    @error('asal_siswa')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div id="rumah_form" style="display: none;">
                                                        </div>
                                                        <div id="tk_form" style="display: none;">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Nama Taman Kanak-Kanak <i
                                                                                class="fa fa-solid fa-star-of-life fa-xs"
                                                                                style="color: red"></i></label>
                                                                        <input type="text"
                                                                            class="form-control @error('nama_tk') is-invalid @enderror"
                                                                            name="nama_tk"
                                                                            placeholder="Nama Taman Kanak-Kanak"
                                                                            value="{{ old('nama_tk') }}">
                                                                        @error('nama_tk')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Alamat <i
                                                                                class="fa fa-solid fa-star-of-life fa-xs"
                                                                                style="color: red"></i></label>
                                                                        <input type="text"
                                                                            class="form-control @error('alamat_tk') is-invalid @enderror"
                                                                            name="alamat_tk"
                                                                            placeholder="Alamat Taman Kanak Kanak"
                                                                            value="{{ old('alamat_tk') }}">
                                                                        @error('alamat_tk')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Ijazah <i
                                                                                class="fa fa-solid fa-star-of-life fa-xs"
                                                                                style="color: red"></i></label>
                                                                        <input type="date"
                                                                            class="form-control @error('tgl_sttb') is-invalid @enderror"
                                                                            name="tgl_sttb" value="{{ old('tgl_sttb') }}">
                                                                        @error('tgl_sttb')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6 col-lg-6">
                                                                    <div class="form-group">
                                                                        <label>Nomor Ijazah <i
                                                                                class="fa fa-solid fa-star-of-life fa-xs"
                                                                                style="color: red"></i></label>
                                                                        <input type="text"
                                                                            class="form-control @error('no_sttb') is-invalid @enderror"
                                                                            name="no_sttb" placeholder="Nomor Ijazah TK"
                                                                            value="{{ old('no_sttb') }}">
                                                                        @error('no_sttb')
                                                                            <div class="invalid-feedback">{{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="siswa_pindahan_form" style="display: none;">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Nama Sekolah Asal<i
                                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                                            style="color: red"></i></label>
                                                                    <input type="text"
                                                                        class="form-control @error('sekolah_asal') is-invalid @enderror"
                                                                        name="sekolah_asal"
                                                                        placeholder="Nama Sekolah Asal"
                                                                        value="{{ old('sekolah_asal') }}">
                                                                    @error('sekolah_asal')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Alamat Sekolah <i
                                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                                            style="color: red"></i></label>
                                                                    <input type="text"
                                                                        class="form-control @error('alamat_sekolah') is-invalid @enderror"
                                                                        name="alamat_sekolah"
                                                                        placeholder="Alamat Sekolah Asal"
                                                                        value="{{ old('alamat_sekolah') }}">
                                                                    @error('alamat_sekolah')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Dari Kelas <i
                                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                                            style="color: red"></i></label>
                                                                    <input type="text"
                                                                        class="form-control @error('dari_kelas') is-invalid @enderror"
                                                                        name="dari_kelas" placeholder="Kelas Sebelumnya"
                                                                        value="{{ old('dari_kelas') }}">
                                                                    @error('dari_kelas')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Di Terima Tanggal <i
                                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                                            style="color: red"></i></label>
                                                                    <input type="date"
                                                                        class="form-control @error('tgl_terima') is-invalid @enderror"
                                                                        name="tgl_terima"
                                                                        value="{{ old('tgl_terima') }}">
                                                                    @error('tgl_terima')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Di Kelas <i
                                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                                            style="color: red"></i></label>
                                                                    <input type="text"
                                                                        class="form-control @error('di_kelas') is-invalid @enderror"
                                                                        name="di_kelas" placeholder="Kelas yang di terima"
                                                                        value="{{ old('di_kelas') }}">
                                                                    @error('di_kelas')
                                                                        <div class="invalid-feedback">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="section-title  mb-4">Informasi Calon Siswa</div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nama Lengkap <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" placeholder="Nama Lengkap"
                                                                value="{{ old('name') }}">
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nama Panggilan <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('call_name') is-invalid @enderror"
                                                                name="call_name" placeholder="Nama Panggilan"
                                                                value="{{ old('call_name') }}">
                                                            @error('call_name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Jenis Kelamin <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <select name="jk" id="jk"
                                                                class="form-control  @error('jk') is-invalid @enderror"
                                                                value="{{ old('jk') }}">
                                                                <option value="">- Pilih Jenis Kelamin -</option>
                                                                <option value="Laki-Laki">Laki-Laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                            @error('jk')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Tempat Lahir <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                                name="tempat_lahir" placeholder="Tempat Lahir"
                                                                value="{{ old('tempat_lahir') }}">
                                                            @error('tempat_lahir')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="date"
                                                                class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                                name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                                                            @error('tgl_lahir')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Agama <i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <select name="agama" id="agama"
                                                                class="form-control @error('alamat') is-invalid @enderror"
                                                                value="{{ old('agama') }}">
                                                                <option value="">- Pilih Agama -</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Budha">Budha</option>
                                                            </select>
                                                            @error('agama')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Kewarganegaraan <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <select name="kewarganegaraan" id="kewarganegaraan"
                                                                class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                                                value="{{ old('kewarganegaraan') }}">
                                                                <option value="">- Pilih Kewarganegaraan-</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Asing">Asing</option>
                                                            </select>
                                                            @error('kewarganegaraan')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Saudara Kandung <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('saudara_kandung') is-invalid @enderror"
                                                                name="saudara_kandung"
                                                                placeholder="Jumlah Saudara Kandung"
                                                                value="{{ old('saudara_kandung') }}">
                                                            @error('saudara_kandung')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Bahasa Sehari-hari <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('bahasa') is-invalid @enderror"
                                                                name="bahasa"
                                                                placeholder="Bahasa sehari-hari di keluarga"
                                                                value="{{ old('bahasa') }}">
                                                            @error('bahasa')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Berat Badan (Kg) <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('berat_badan') is-invalid @enderror"
                                                                name="berat_badan" placeholder="Berat Badan"
                                                                value="{{ old('berat_badan') }}">
                                                            @error('berat_badan')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Tinggi Badan (Cm) <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('tinggi_badan') is-invalid @enderror"
                                                                name="tinggi_badan" placeholder="Tinggi Badan"
                                                                value="{{ old('tinggi_badan') }}">
                                                            @error('tinggi_badan')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Golongan Darah <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('gol_darah') is-invalid @enderror"
                                                                name="gol_darah" placeholder="Golongan Darah"
                                                                value="{{ old('gol_darah') }}">
                                                            @error('gol_darah')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Riwayat Penyakit<i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('penyakit') is-invalid @enderror"
                                                                name="penyakit" placeholder="Penyakit yang diderita"
                                                                value="{{ old('penyakit') }}">
                                                            @error('penyakit')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Alamat <i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}"
                                                                id="alamat" cols="30" rows="10"></textarea>
                                                            @error('alamat')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nomor Handphone <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('no_telp') is-invalid @enderror"
                                                                name="no_telp" placeholder="081234+++++"
                                                                value="{{ old('no_telp') }}">
                                                            @error('no_telp')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Tinggal Bersama<i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <select name="tempat_tinggal" id="tempat_tinggal"
                                                                class="form-control @error('tempat_tinggal') is-invalid @enderror"
                                                                value="{{ old('tempat_tinggal') }}">
                                                                <option value="">- Pilih Tempat Tinggal -</option>
                                                                <option value="Orang Tua">Orang Tua</option>
                                                                <option value="Menumpang">Menumpang</option>
                                                                <option value="Asrama">Asrama</option>
                                                            </select>
                                                            @error('tempat_tinggal')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Jarak Tempat Tinggal ke Sekolah (Km) <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('zonasi') is-invalid @enderror"
                                                                name="zonasi"
                                                                placeholder="Jarak Tempat Tinggal Ke Sekolah"
                                                                value="{{ old('zonasi') }}">
                                                            @error('zonasi')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="section-title mb-4">Informasi Ayah</div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nama Ayah <i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('nama_ayah') is-invalid @enderror"
                                                                name="nama_ayah" placeholder="Nama Lengkap Ayah"
                                                                value="{{ old('nama_ayah') }}">
                                                            @error('nama_ayah')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Pendidikan Ayah <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('pend_ayah') is-invalid @enderror"
                                                                name="pend_ayah" placeholder="Pendidikan Tertinggi Ayah"
                                                                value="{{ old('pend_ayah') }}">
                                                            @error('pend_ayah')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Pekerjaan <i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                                                                name="pekerjaan_ayah" placeholder="Pekerjaan Ayah"
                                                                value="{{ old('pekerjaan_ayah') }}">
                                                            @error('pekerjaan_ayah')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-title mb-4">Informasi Ibu</div>

                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nama Ibu <i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('nama_ibu') is-invalid @enderror"
                                                                name="nama_ibu" placeholder="Nama Lengkap Ibu"
                                                                value="{{ old('nama_ibu') }}">
                                                            @error('nama_ibu')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Pendidikan Ibu <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('pend_ibu') is-invalid @enderror"
                                                                name="pend_ibu" placeholder="Pendidikan Tertinggi Ibu"
                                                                value="{{ old('pend_ibu') }}">
                                                            @error('pend_ibu')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Pekerjaan Ibu <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                                                                name="pekerjaan_ibu" placeholder="Pekerjaan Ibu"
                                                                value="{{ old('pekerjaan_ibu') }}">
                                                            @error('pekerjaan_ibu')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-title mb-4">Informasi Wali Murid</div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Wali Murid (jika ada) <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('wali_murid') is-invalid @enderror"
                                                                name="wali_murid" placeholder="Nama Lengkap Wali Murid"
                                                                value="{{ old('wali_murid') }}">
                                                            @error('wali_murid')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Hubungan Keluarga <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('hub_kel') is-invalid @enderror"
                                                                name="hub_kel" placeholder="Hubungan Keluarga"
                                                                value="{{ old('hub_kel') }}">
                                                            @error('hub_kel')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Pendidikan <i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('pend_wali') is-invalid @enderror"
                                                                name="pend_wali"
                                                                placeholder="Pendidikan Tertinggi Wali Murid"
                                                                value="{{ old('pend_wali') }}">
                                                            @error('pend_wali')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Pekerjaan <i class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="text"
                                                                class="form-control @error('pekerjaan_wali') is-invalid @enderror"
                                                                name="pekerjaan_wali" placeholder="Pekerjaan Wali Murid"
                                                                value="{{ old('pekerjaan_wali') }}">
                                                            @error('pekerjaan_wali')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="section-title mt-5 mb-4">Kelengkapan Berkas Penunjang</div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="file">Pas Photo <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="file"
                                                                class="form-control @error('profile') is-invalid @enderror"
                                                                name="profile" value="{{ old('profile') }}">
                                                            @error('profile')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="file">Ijazah TK <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="file"
                                                                class="form-control @error('ijazah_tk') is-invalid @enderror"
                                                                name="ijazah_tk" value="{{ old('ijazah_tk') }}">
                                                            @error('ijazah_tk')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="file">File Akte <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="file"
                                                                class="form-control @error('akte') is-invalid @enderror"
                                                                name="akte" value="{{ old('akte') }}">
                                                            @error('akte')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="file">File KK <i
                                                                    class="fa fa-solid fa-star-of-life fa-xs"
                                                                    style="color: red"></i></label>
                                                            <input type="file"
                                                                class="form-control @error('kk') is-invalid @enderror"
                                                                name="kk" value="{{ old('kk') }}">
                                                            @error('kk')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer bg-whitesmoke br">
                                                <a href="{{ route('/') }}" type="button"
                                                    class="btn btn-secondary">Batal</a>
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                    </div>
                                    </form>
                                    <!-- penutup Form Tambah Data -->

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
    </div>
    <footer class="main-footer">
        <div>
            <div class="copyright">
                &copy; <strong><span>Universitas Dinamika Bangsa</span></strong> |
                {{ \Carbon\Carbon::now()->year }}
            </div>
        </div>
    </footer>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const statusSiswaSelect = document.getElementById("status_siswa");
            const siswaBaruForm = document.getElementById("siswa_baru_form");
            const siswaPindahanForm = document.getElementById("siswa_pindahan_form");
            const asalSiswaSelect = document.getElementById("asal_siswa");
            const rumahForm = document.getElementById("rumah_form");
            const tkForm = document.getElementById("tk_form");

            statusSiswaSelect.addEventListener("change", function() {
                const selectedStatus = statusSiswaSelect.value;

                // Sembunyikan semua form terlebih dahulu
                siswaBaruForm.style.display = "none";
                siswaPindahanForm.style.display = "none";

                // Tampilkan form yang sesuai dengan status siswa yang dipilih
                if (selectedStatus === "Siswa Baru") {
                    siswaBaruForm.style.display = "block";
                } else if (selectedStatus === "Siswa Pindahan") {
                    siswaPindahanForm.style.display = "block";
                }
            });

            asalSiswaSelect.addEventListener("change", function() {
                const selectedStatus = asalSiswaSelect.value;

                // Sembunyikan semua form terlebih dahulu
                rumahForm.style.display = "none";
                tkForm.style.display = "none";

                // Tampilkan form yang sesuai dengan status siswa yang dipilih
                if (selectedStatus === "Rumah Tangga") {
                    rumahForm.style.display = "block";
                } else if (selectedStatus === "TK") {
                    tkForm.style.display = "block";
                }
            });
        });
    </script>
@endSection;

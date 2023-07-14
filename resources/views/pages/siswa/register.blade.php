@extends('layouts.main')

@section('content')
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <?php if (isset($_SESSION['namaPeserta'])) { ?>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <!-- klo mau nambah menu notifikasi langsung ke websitenya aja (https://getstisla.com/) -->
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"><?= $_SESSION['namaPeserta'] ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                            <a href="../../controller/admin/daftar.php?logout" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- SIDEBAR -->
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href=""><img src="../../assets/img/avatar/icone.png" alt="LP" width="30px">
                            PPDB</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href=""><img src="../../assets/img/avatar/icone.png" alt="LP" width="47px"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i
                                    class="fas fa-book"></i><span>Pendatar</span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="nav-link" href="daftarSiswa.php">Data Siswa</a></li>
                                <li><a class="nav-link" href="daftarOrtu.php">Data Orang Tua</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <button class="btn btn-primary btn-lg btn-block btn-icon-split"
                            onclick="cetak(<?= $_SESSION['nisnPeserta'] ?>)">
                            <i class="fas fa-sign-out-alt"></i> Cetak Kartu Peserta
                        </button>
                    </div>
                </aside>
            </div>
            <?php } else {
            echo '<style>.main-content { padding-left: 30px; } .navbar { left: 30px; }</style>';
        } ?>

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
                                        <form action="{{ route('siswa.store') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Nama Sekolah <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('nama_sekolah') is-invalid @enderror"
                                                        name="nama_sekolah" placeholder="Nama Sekolah Asal"
                                                        value="{{ old('nama_sekolah') }}">
                                                    @error('nama_sekolah')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat Sekolah <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('alamat_sekolah') is-invalid @enderror"
                                                        name="alamat_sekolah" placeholder="Alamat Sekolah Asal"
                                                        value="{{ old('alamat_sekolah') }}">
                                                    @error('alamat_sekolah')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="section-title mt-5 mb-4">Informasi Calon Siswa</div>

                                                <div class="form-group">
                                                    <label>Nama Lengkap <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" placeholder="Nama Lengkap"
                                                        value="{{ old('name') }}">
                                                    @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Kelamin <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <select name="jk" id="jk" class="form-control"
                                                        value="{{ old('jk') }}">
                                                        <option value="">- Pilih Jenis Kelamin -</option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tempat Lahir <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                        name="tempat_lahir" placeholder="Tempat Lahir"
                                                        value="{{ old('tempat_lahir') }}">
                                                    @error('tempat_lahir')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Lahir <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="date" class="form-control" name="tgl_lahir"
                                                        value="{{ old('tgl_lahir') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat Sekarang <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <textarea name="alamat" class="form-control" value="{{ old('alamat') }}" id="alamat" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Agama <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <select name="agama" id="agama" class="form-control"
                                                        value="{{ old('agama') }}">
                                                        <option value="">- Pilih Agama -</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kebutuhan Khusus <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <select name="keb_khusus" id="keb_khusus" class="form-control"
                                                        value="{{ old('keb_khusus') }}">
                                                        <option value="">- Pilih -</option>
                                                        <option value="Iya">IYA</option>
                                                        <option value="Tidak">TIDAK</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>RT <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('rt') is-invalid @enderror"
                                                        name="rt" placeholder="Rukun Tetangga"
                                                        value="{{ old('rt') }}">
                                                    @error('rt')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>RW <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('rw') is-invalid @enderror"
                                                        name="rw" placeholder="Rukun Warga"
                                                        value="{{ old('rw') }}">
                                                    @error('rw')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Dusun <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('dusun') is-invalid @enderror"
                                                        name="dusun" placeholder="Nama Dusun"
                                                        value="{{ old('dusun') }}">
                                                    @error('dusun')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Kelurahan/Desa <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('kelurahan') is-invalid @enderror"
                                                        name="kelurahan" placeholder="Nama Kelurahan/Desa"
                                                        value="{{ old('kelurahan') }}">
                                                    @error('kelurahan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Kecamatan <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('kecamatan') is-invalid @enderror"
                                                        name="kecamatan" placeholder="Nama Kecamatan"
                                                        value="{{ old('kecamatan') }}">
                                                    @error('kecamatan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Kabupaten <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('kabupaten') is-invalid @enderror"
                                                        name="kabupaten" placeholder="Nama Kabupaten"
                                                        value="{{ old('kabupaten') }}">
                                                    @error('kabupaten')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Tempat Tinggal <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <select name="tempat_tinggal" id="tempat_tinggal"
                                                        class="form-control" value="{{ old('tempat_tinggal') }}">
                                                        <option value="">- Pilih -</option>
                                                        <option value="Rumah">Rumah</option>
                                                        <option value="Kontrakan">Kontrakan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Moda Transportasi <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <select name="moda_transport" id="moda_transport"
                                                        class="form-control" value="{{ old('moda_transport') }}">
                                                        <option value="">- Pilih -</option>
                                                        <option value="Jalan Kaki">Jalan Kaki</option>
                                                        <option value="Sepeda Motor">Sepeda Motor</option>
                                                        <option value="Mobil">Mobil</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor Handphone <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('no_telp') is-invalid @enderror"
                                                        name="no_telp" placeholder="081234+++++"
                                                        value="{{ old('no_telp') }}">
                                                    @error('no_telp')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Kewarganegaraan <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <select name="kewarganegaraan" id="kewarganegaraan"
                                                        class="form-control" value="{{ old('kewarganegaraan') }}">
                                                        <option value="">- Pilih -</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Asing">Asing</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Saudara Kandung <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('saudara_kandung') is-invalid @enderror"
                                                        name="saudara_kandung" placeholder="Jumlah Saudara Kandung"
                                                        value="{{ old('saudara_kandung') }}">
                                                    @error('saudara_kandung')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Tinggi Badan (Cm) <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('tbadan') is-invalid @enderror"
                                                        name="tbadan" placeholder="Tinggi Badan"
                                                        value=" {{ old('tbadan') }}">
                                                    @error('tbadan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Berat Badan (Kg) <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('bbadan') is-invalid @enderror"
                                                        name="bbadan" placeholder="Berat Badan"
                                                        value="{{ old('bbadan') }}">
                                                    @error('bbadan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Jarak Tempat Tinggal (Km) <i
                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('zonasi') is-invalid @enderror"
                                                        name="zonasi" placeholder="Jarak Tempat Tinggal Ke Sekolah"
                                                        value="{{ old('zonasi') }}">
                                                    @error('zonasi')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Waktu Tempuh (Menit) <i
                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('waktu_tempuh') is-invalid @enderror"
                                                        name="waktu_tempuh" placeholder="Waktu Tempuh ke Sekolah"
                                                        value="{{ old('waktu_tempuh') }}">
                                                    @error('waktu_tempuh')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="section-title mt-5 mb-4">Informasi Orang Tua</div>

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
                                                <div class="form-group">
                                                    <label>Tanggal Lahir <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="date" class="form-control" name="tgl_lahir_ayah"
                                                        value="{{ old('tgl_lahir_ayah') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pendidikan Ayah <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('pend_ayah') is-invalid @enderror"
                                                        name="pend_ayah" placeholder="Pendidikan Terakhir"
                                                        value="{{ old('pend_ayah') }}">
                                                    @error('pend_ayah')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
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
                                                <div class="form-group">
                                                    <label>Pendapatan Bulanan Ayah <i
                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="number"
                                                        class="form-control @error('pendapatan_ayah') is-invalid @enderror"
                                                        name="pendapatan_ayah" placeholder="Rp. 123.123"
                                                        value="{{ old('pendapatan_ayah') }}">
                                                    @error('pendapatan_ayah')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
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
                                                <div class="form-group">
                                                    <label>Tanggal Lahir <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="date" class="form-control" name="tgl_lahir_ibu"
                                                        value="{{ old('tgl_lahir_ibu') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pendidikan Ibu <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('pend_ibu') is-invalid @enderror"
                                                        name="pend_ibu" placeholder="Pendidikan Terakhir Ibu"
                                                        value="{{ old('pend_ibu') }}">
                                                    @error('pend_ibu')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Pekerjaan Ibu <i class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="text"
                                                        class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                                                        name="pekerjaan_ibu" placeholder="Pekerjaan Ibu"
                                                        value="{{ old('pekerjaan_ibu') }}">
                                                    @error('pekerjaan_ibu')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Pendapatan Bulanan Ibu <i
                                                            class="fa fa-solid fa-star-of-life fa-xs"
                                                            style="color: red"></i></label>
                                                    <input type="number"
                                                        class="form-control @error('pendapatan_ibu') is-invalid @enderror"
                                                        name="pendapatan_ibu" placeholder="Rp. 123.123"
                                                        value="{{ old('pendapatan_ibu') }}">
                                                    @error('pendapatan_ibu')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <br>
                                                <div class="modal-footer bg-whitesmoke br">
                                                    <a href="tampilData.php" type="button"
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

            <!-- Penutup Isinya -->

            <!-- Fungsi untuk cetak -->
            <script type="text/javascript">
                function cetak(id) {
                    window.open("../cetak/index.php?id=" + id, "_blank",
                        "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=100,width=900,height=460");
                }
            </script>


            <!-- Footer -->

        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval
                    Azhar</a>
            </div>
            <div class="footer-right">
                Developer : <a href="//linkedin.com/in/bejosuseno" target="blank">Code Peka</a>
            </div>
        </footer>
    </div>
@endSection;

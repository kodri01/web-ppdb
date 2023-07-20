@extends('layouts.admin_main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h4>Basic DataTables</h4> -->
                            <a href="{{ route('data.siswa') }}" type="button"
                                class="btn btn-primary daterange-btn icon-left btn-icon">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="section-title mt-0 ml-4">Informasi Data Siswa</div>
                                    <div class="card ">
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Nama Lengkap</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->nama_lengkap }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tempat Lahir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->tempat_lahir }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tanggal Lahir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $siswa->tgl_lahir)->format('d F Y') }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Jenis Kelamin</div>
                                            <input type="text" class="form-control" disabled value="{{ $siswa->jk }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Agama</div>
                                            <input type="text" class="form-control" disabled value="{{ $siswa->agama }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Nomor Handphone</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->no_telp }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Alamat</div>
                                            <input type="text" class="form-control" disabled value="{{ $siswa->alamat }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text">RT</div>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $siswa->rt }}" id="specificSizeInputGroupUsername">
                                                </div>

                                            </div>
                                            <div class="col">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text">RW</div>
                                                    <input type="text" class="form-control" disabled
                                                        value="{{ $siswa->rw }}" id="specificSizeInputGroupUsername">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Dusun</div>
                                            <input type="text" class="form-control" disabled value="{{ $siswa->dusun }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Kelurahan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->kelurahan }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Kecamatan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->kecamatan }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Kabupaten</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->kabupaten }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Kewarganegaraan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->kewarganegaraan }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Saudara Kandung</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->jml_saudara }} Orang"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tinggi Badan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->tbadan }} CM" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Berat Badan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->bbadan }} KG" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Moda Transportasi</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->moda_transport }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Jarak Tempat Tinggal ke Sekolah </div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->zonasi }} KM" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Waktu Tempuh</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->waktu_tempuh }} Menit"
                                                id="specificSizeInputGroupUsername">
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg- 4">
                                                <div class="input-group ">
                                                    <div class="input-group-text">Pas Photo</div>
                                                    <div class="show-image d-inline-block" id="show-image"
                                                        style="width: 150px; height: auto;">
                                                        <img src='{{ url('uploads/' . $siswa->profile) }}'
                                                            class="img-fluid img-thumbnail" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg- 4">
                                                <div class="input-group ">
                                                    <div class="input-group-text">File KK</div>
                                                    <div class="show-image d-inline-block" id="show-image"
                                                        style="width: 150px; height: auto;">
                                                        <img src='{{ url('uploads/' . $siswa->kk) }}'
                                                            class="img-fluid img-thumbnail" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg- 4">
                                                <div class="input-group ">
                                                    <div class="input-group-text">File Akte</div>
                                                    <div class="show-image d-inline-block" id="show-image"
                                                        style="width: 150px; height: auto;">
                                                        <img src='{{ url('uploads/' . $siswa->akte) }}'
                                                            class="img-fluid img-thumbnail" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-6">
                                    <div class="section-title mt-0 ml-4">Informasi Orang Tua</div>
                                    <div class="card">
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Nama Ayah</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->nama_ayah }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tanggal Lahir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $siswa->tgl_lahir_ayah)->format('d F Y') }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Pendidikan Terakhir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->pend_ayah }}" id="specificSizeInputGroupUsername">
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Pekerjaan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->pekerja_ayah }}" id="specificSizeInputGroupUsername">

                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Gaji Bulanan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->gaji_ayah }}" id="specificSizeInputGroupUsername">
                                        </div>


                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Nama Ibu</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->nama_ibu }}" id="specificSizeInputGroupUsername">
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tanggal Lahir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $siswa->tgl_lahir_ibu)->format('d F Y') }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Pendidikan Terakhir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->pend_ibu }}" id="specificSizeInputGroupUsername">
                                        </div>


                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Pekerjaan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->pekerja_ibu }}" id="specificSizeInputGroupUsername">

                                        </div>

                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Gaji Bulanan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->gaji_ibu }}" id="specificSizeInputGroupUsername">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection;

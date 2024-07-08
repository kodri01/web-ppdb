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
                                    <div class="input-group mb-2">
                                        <div class="input-group-text">Status Siswa</div>
                                        <input type="text" class="form-control text-uppercase text-success" disabled
                                            value="{{ $siswa->status_siswa }}" id="specificSizeInputGroupUsername">
                                    </div>
                                    @if ($siswa->status_siswa == 'Siswa Baru')
                                        {{-- <div class="card "> --}}
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Asal Siswa</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->asal_siswa }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        @if ($siswa->asal_siswa == 'Non-TK')
                                            <div></div>
                                        @else
                                            <div class="input-group mb-2">
                                                <div class="input-group-text">Nama TK</div>
                                                <input type="text" class="form-control" disabled
                                                    value="{{ $siswa->nama_tk }}" id="specificSizeInputGroupUsername">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-text">Alamat TK</div>
                                                <input type="text" class="form-control" disabled
                                                    value="{{ $siswa->alamat_tk }}" id="specificSizeInputGroupUsername">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-text">Tanggal Ijazah</div>
                                                <input type="text" class="form-control" disabled
                                                    value="{{ date('d F Y', strtotime($siswa->tgl_sttb)) }}"
                                                    id="specificSizeInputGroupUsername">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-text">Nomor Ijazah</div>
                                                <input type="text" class="form-control" disabled
                                                    value="{{ $siswa->no_sttb }}" id="specificSizeInputGroupUsername">
                                            </div>
                                        @endif
                                        {{-- </div> --}}
                                    @else
                                        {{-- <div class="card "> --}}
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Sekolah Asal</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->sekolah_asal }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Alamat Sekolah</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->alamat_sekolah }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Kelas Sebelumnya</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->dari_kelas }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tanggal Terima</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ date('d F Y', strtotime($siswa->tgl_terima)) }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Di Kelas</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->di_kelas }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        {{-- </div> --}}
                                    @endif
                                    <div class="card ">
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Nama Lengkap</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->nama_lengkap }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Nama Panggilan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->nama_panggilan }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Jenis Kelamin</div>
                                            <input type="text" class="form-control" disabled value="{{ $siswa->jk }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tempat Lahir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->tempat_lahir }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tanggal Lahir</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ date('d F Y', strtotime($siswa->tgl_lahir)) }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Agama</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->agama }}" id="specificSizeInputGroupUsername">
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
                                                value="{{ $siswa->saudara_kandung }} Orang"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Bahasa Sehari-hari</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->bahasa }} Orang" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Berat Badan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->berat_badan }} KG" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tinggi Badan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->tinggi_badan }} CM"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Golongan Darah</div>
                                            <input type="text" class="form-control" disabled
                                                value="Darah {{ $siswa->gol_darah }}"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Riwayat Penyakit</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->penyakit }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Alamat</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->alamat }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Nomor Handphone</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->no_telp }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Tempat Tinggal</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->tempat_tinggal }} Menit"
                                                id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Jarak Tempat Tinggal ke Sekolah </div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->zonasi }} KM" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group ">
                                            <div class="input-group-text my-2">Pas Photo</div>
                                            <div class="show-image d-inline-block" id="show-image"
                                                style="width: 150px; height: auto;">
                                                <img src='{{ url('uploads/' . $siswa->profile) }}'
                                                    class="img-fluid img-thumbnail" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            @if ($siswa->ijazah_tk != null)
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="input-group ">
                                                        <div class="input-group-text my-2">Ijazah TK</div>
                                                        <div class="show-image d-inline-block" id="show-image"
                                                            style="width: 150px; height: auto;">
                                                            @if ($extensionTk == 'pdf')
                                                                <img src='{{ url('assets/img/pdf.png') }}'
                                                                    class="img-fluid img-thumbnail" />
                                                            @else
                                                                <img src='{{ url('uploads/' . $siswa->ijazah_tk) }}'
                                                                    class="img-fluid img-thumbnail" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="my-4 ml-3">
                                                        <a href="{{ asset('uploads/' . $siswa->ijazah_tk) }}"
                                                            class="text-black btn btn-lg btn-outline-primary"
                                                            target="_blank">
                                                            <i class="fas fa-download"> Ijazah TK </i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @else
                                                <div></div>
                                            @endif
                                            @if ($siswa->kk != null)
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="input-group ">
                                                        <div class="input-group-text my-2">File KK</div>
                                                        <div class="show-image d-inline-block" id="show-image"
                                                            style="width: 150px; height: auto;">
                                                            @if ($extensionKK == 'pdf')
                                                                <img src='{{ url('assets/img/pdf.png') }}'
                                                                    class="img-fluid img-thumbnail" />
                                                            @else
                                                                <img src='{{ url('uploads/' . $siswa->kk) }}'
                                                                    class="img-fluid img-thumbnail" />
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="my-4 ml-3">
                                                        <a href="{{ asset('uploads/' . $siswa->kk) }}"
                                                            class="text-black btn btn-lg btn-outline-primary"
                                                            target="_blank">
                                                            <i class="fas fa-download"> File KK </i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="show-image d-inline-block" id="show-image"
                                                    style="width: 150px; height: auto;">
                                                    <img src='{{ url('assets/img/pdf.png') }}'
                                                        class="img-fluid img-thumbnail" />
                                                </div>
                                            @endif
                                            @if ($siswa->akte != null)
                                                <div class="col-sm-6 col-md-4 col-lg-4">
                                                    <div class="input-group ">
                                                        <div class="input-group-text my-2">File Akte</div>
                                                        <div class="show-image d-inline-block" id="show-image"
                                                            style="width: 150px; height: auto;">

                                                            @if ($extensionAkte == 'pdf')
                                                                <img src='{{ url('assets/img/pdf.png') }}'
                                                                    class="img-fluid img-thumbnail" />
                                                            @else
                                                                <img src='{{ url('uploads/' . $siswa->akte) }}'
                                                                    class="img-fluid img-thumbnail" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="my-4 ml-3">
                                                        <a href="{{ asset('uploads/' . $siswa->akte) }}"
                                                            class="text-black btn btn-lg btn-outline-primary"
                                                            target="_blank">
                                                            <i class="fas fa-download">FIle Akte </i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @else
                                                <div></div>
                                            @endif

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
                                            <div class="input-group-text">Nama Ibu</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->nama_ibu }}" id="specificSizeInputGroupUsername">
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
                                            <div class="input-group-text">Nama Wali Murid</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->wali_murid }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Hubungan Keluarga </div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->hub_kel }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Pendidikan </div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->pend_wali }}" id="specificSizeInputGroupUsername">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">Pekerjaan</div>
                                            <input type="text" class="form-control" disabled
                                                value="{{ $siswa->pekerjaan_wali }}" id="specificSizeInputGroupUsername">
                                        </div>

                                    </div>


                                    <div class="section-title mt-0 ml-4">Informasi Pembayaran</div>
                                    @if ($bayar != null)
                                        <div class="card">
                                            <div class="input-group mb-2">
                                                <div class="input-group-text">Tanggal Transfer</div>
                                                <input type="text" class="form-control" disabled
                                                    value="{{ date('d F Y', strtotime($bayar->tgl_tf)) }}"
                                                    id="specificSizeInputGroupUsername">
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-text">Rekening Bank</div>
                                                <input type="text" class="form-control" disabled
                                                    value="{{ $bayar->rek_bank }}" id="specificSizeInputGroupUsername">
                                            </div>

                                            <div class="input-group mb-2">
                                                <div class="input-group-text">Nominal Transfer</div>
                                                <input type="text" class="form-control" disabled
                                                    value="{{ 'Rp ' . number_format($bayar->nominal, 0, ',', '.') }}"
                                                    id="specificSizeInputGroupUsername">
                                            </div>
                                            @if ($bayar->bukti_tf != null)
                                                <div class="w-25">
                                                    <div class="input-group-text my-2">Bukti Transfer</div>
                                                    <div class="input-group ">
                                                        <div class="show-image d-inline-block" id="show-image">
                                                            <img src='{{ url('uploads/' . $bayar->bukti_tf) }}'
                                                                class="" style="width: 350px; height: 350px;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class=""></div>
                                            @endif
                                        </div>
                                    @else
                                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                                role="img" aria-label="Warning:">
                                                <use xlink:href="#exclamation-triangle-fill" />
                                            </svg>
                                            <div>
                                                &nbsp; &nbsp; SISWA INI BELUM MELAKUKAN PEMBAYARAN
                                            </div>
                                        </div>
                                    @endif

                                    @if ($siswa->file_regist != null)
                                        <div class="input-group-text my-2 w-25">Bukti Registrasi</div>
                                        <div class="input-group ">
                                            <div class="show-image d-inline-block" id="show-image"
                                                style="width: 150px; height: auto;">
                                                <img src='{{ url('assets/img/pdf.png') }}'
                                                    class="img-fluid img-thumbnail" />
                                            </div>
                                        </div>
                                        <div class="my-4 ml-3">
                                            <a href="{{ asset('uploads/' . $siswa->file_regist) }}"
                                                class="text-black btn btn-lg btn-outline-primary" target="_blank">
                                                <i class="fas fa-download"> Bukti Registrasi </i>
                                            </a>
                                        </div>
                                    @else
                                        <div></div>
                                    @endif
                                </div>

                            </div>

                            @if ($siswa->alasan == null && $siswa->status == 0)
                                <div class="row justify-content-end">
                                    <label for="" class="my-2"><b>Verifikasi Pendaftaran
                                            :</b></label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <a class="btn btn-danger" onclick="showMessageForm()">Tidak
                                            Terima</a>
                                        <div id="pesanModal" class="modal" tabindex="-1" style="display: none; ">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="box-shadow:  11px 11px 22px #bebebe">
                                                    <form action="{{ route('tolak.siswa', $siswa->id) }}" method="post">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Alasan
                                                                Penolakan
                                                                Siswa
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                onclick="hideMessageForm()" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="message-text" class="col-form-label">Alasan
                                                                    yang
                                                                    logis:</label>
                                                                <textarea class="form-control" name="alasan" id="message-text"></textarea>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="message-text" class="col-form-label">Dokumen
                                                                    yang
                                                                    ditolak:</label>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value="1"
                                                                                id="kk" name="file_kk">
                                                                            <label class="form-check-label"
                                                                                for="kk">
                                                                                File KK
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value="2"
                                                                                id="akte" name="file_akte">
                                                                            <label class="form-check-label"
                                                                                for="akte">
                                                                                File Akte
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value="3"
                                                                                id="ijazah_tk" name="file_tk">
                                                                            <label class="form-check-label"
                                                                                for="ijazah_tk">
                                                                                Ijazah TK
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                onclick="hideMessageForm()">Close</button>
                                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <form action="{{ route('update.siswa', $siswa->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            <input type="hidden" id="pesan" name="pesan" value="">
                                            <button class="btn btn-success" type="submit">Terima</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </symbol>
                                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </symbol>
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>
                                @if ($siswa->status != 0)
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                                    role="img" aria-label="Success:">
                                                    <use xlink:href="#check-circle-fill" />
                                                </svg>
                                                <div>
                                                    &nbsp; &nbsp; PENDAFTARAN DITERIMA
                                                </div>
                                            </div>
                                        </div>
                                        @if ($siswa->regist_alasan == null && $siswa->regist_status == 0)
                                            {{-- fitur baru --}}
                                            <div class="col-sm-6">
                                                <div class="row justify-content-end">
                                                    <label for="" class="my-2"><b>Verifikasi Pembayaran
                                                            :</b></label>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <a class="btn btn-danger" onclick="showMessageForm()">Tolak
                                                            Pembayaran</a>
                                                        <div id="pesanModal" class="modal" tabindex="-1"
                                                            style="display: none; ">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content"
                                                                    style="box-shadow:  11px 11px 22px #bebebe">
                                                                    <form
                                                                        action="{{ route('regist_tolak.siswa', $siswa->id) }}"
                                                                        method="post">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">
                                                                                Alasan
                                                                                Pembayaran Ditolak
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                onclick="hideMessageForm()"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                <label for="message-text"
                                                                                    class="col-form-label">Alasan
                                                                                    yang
                                                                                    logis:</label>
                                                                                <textarea class="form-control" name="alasan" id="message-text"></textarea>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                onclick="hideMessageForm()">Close</button>
                                                                            <button class="btn btn-primary"
                                                                                type="submit">Simpan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <form action="{{ route('regist_terima.siswa', $siswa->id) }}"
                                                            method="post" class="d-inline">
                                                            @csrf
                                                            <input type="hidden" id="pesan" name="pesan"
                                                                value="">
                                                            <button class="btn btn-success"
                                                                type="submit">Verifikasi</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </symbol>
                                                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                                </symbol>
                                                <symbol id="exclamation-triangle-fill" fill="currentColor"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </symbol>
                                            </svg>
                                            @if ($siswa->regist_status != 0)
                                                <div class="col-sm-6">
                                                    <div class="alert alert-success d-flex align-items-center"
                                                        role="alert">
                                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                                            role="img" aria-label="Success:">
                                                            <use xlink:href="#check-circle-fill" />
                                                        </svg>
                                                        <div>
                                                            &nbsp; &nbsp; PEMBAYARAN DITERIMA
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif ($siswa->regist_alasan != null)
                                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                                        role="img" aria-label="Danger:">
                                                        <use xlink:href="#exclamation-triangle-fill" />
                                                    </svg>
                                                    <div>
                                                        &nbsp; &nbsp; PEMBAYARAN DITOLAK
                                                    </div>
                                                </div>
                                            @else
                                                <div class=""></div>
                                            @endif
                                        @endif
                                        {{-- batas fitur baru --}}
                                    </div>
                                @elseif ($siswa->alasan != null)
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                            aria-label="Danger:">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        <div>
                                            &nbsp; &nbsp; PENDAFTARAN DITOLAK
                                        </div>
                                    </div>
                                @else
                                    <div class=""></div>
                                @endif

                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        function showMessageForm() {
            var modal = document.getElementById("pesanModal");
            modal.style.display = "block";
        }

        function hideMessageForm() {
            var modal = document.getElementById("pesanModal");
            modal.style.display = "none";
        }
    </script>
@endSection;

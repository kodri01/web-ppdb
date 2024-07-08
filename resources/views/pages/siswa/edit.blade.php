@extends('layouts.siswa_main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1><?= $judul ?></h1>
        </div>


        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h4>Basic DataTables</h4> -->
                            <a href="{{ route('dashboard.siswa') }}" type="button"
                                class="btn btn-primary daterange-btn icon-left btn-icon">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        <div class="card-body">

                            <div class="section-title mt-0 ml-4">Ubah File Siswa</div>

                            <!-- Tambah Data -->
                            <form action="{{ route('update_tolak.siswa', $siswa->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="kk_asli" value="{{ $siswa->kk }}">
                                    <input type="hidden" name="akte_asli" value="{{ $siswa->akte }}">
                                    <input type="hidden" name="ijazah_tk_asli" value="{{ $siswa->ijazah_tk }}">
                                    <div class="row">
                                        @if ($siswa->file_tolak == 1)
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
                                        @elseif ($siswa->file_tolak == 2)
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
                                        @elseif ($siswa->file_tolak == 3)
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
                                        @elseif ($siswa->file_tolak == 12)
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
                                        @elseif ($siswa->file_tolak == 13)
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
                                        @elseif ($siswa->file_tolak == 23)
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
                                        @else
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
                                        @endif



                                    </div>

                                    <div class="modal-footer bg-whitesmoke br">
                                        <a href="{{ route('admin') }}" type="button"
                                            class="btn btn-secondary">Batal</a>
                                        <button class="btn btn-primary" name="tambahData">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endSection;

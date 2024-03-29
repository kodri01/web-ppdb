@extends('layouts.admin_main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
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
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <!-- <h4>Basic DataTables</h4> -->
                            <a href="{{ route('add.siswa') }}" type="button"
                                class="btn btn-primary daterange-btn icon-left btn-icon">
                                <i class="fas fa-plus"></i> Tambah Data Siswa
                            </a>
                        </div> --}}
                        <div class="card-body">

                            <!-- tabelnya -->
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th>No Register</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status Siswa</th>
                                            <th>Status Daftar </th>
                                            <th>Status Regist Ulang</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $s)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $s->no_register }}</td>
                                                <td>{{ $s->nama_lengkap }}</td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $s->tgl_lahir)->format('d F Y') }}
                                                </td>
                                                <td>{{ $s->jk }}</td>
                                                <td>{{ $s->status_siswa }}</td>
                                                <td>
                                                    @if ($s->status == 0 && $s->alasan == null)
                                                        <label for=""><span
                                                                class="badge bg-info text-white text-left">Belum
                                                                <br>
                                                                Diproses</span></label>
                                                    @elseif ($s->status == 1 && $s->alasan == null)
                                                        <label for=""><span
                                                                class="badge bg-success text-white">Diterima</span></label>
                                                    @elseif ($s->status == 0 && $s->alasan != null)
                                                        <label for=""><span
                                                                class="badge bg-danger text-white">Ditolak</span></label>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($s->regist_status == 0 && $s->regist_alasan == null)
                                                        <label for=""><span
                                                                class="badge bg-info text-white text-left">Belum
                                                                <br>
                                                                Verifikasi</span></label>
                                                    @elseif ($s->regist_status == 1 && $s->regist_alasan == null)
                                                        <label for=""><span
                                                                class="badge bg-success text-white">Terverikasi</span></label>
                                                    @elseif ($s->regist_status == 0 && $s->regist_alasan != null)
                                                        <label for=""><span
                                                                class="badge bg-danger text-white text-left">Verifikasi <br>
                                                                Ditolak</span></label>
                                                    @endif
                                                </td>
                                                <td style="width: 150px">
                                                    <div class="row">
                                                        {{-- <div class="col-sm-4 col-md-4 col-lg-4  d-inline-flex">
                                                            <form action="{{ route('update.siswa', $s->id) }}"
                                                                method="post" class="d-inline">
                                                                @csrf
                                                                <button class="btn btn-sm btn-success"
                                                                    type="submit">Seleksi</button>
                                                            </form>
                                                        </div> --}}
                                                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                                                            <a href="{{ route('details.siswa', $s->id) }}"
                                                                class="btn btn-sm btn-primary ">Details</a>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6 col-lg-6 d-inline-flex">
                                                            <form action="{{ route('delete.siswa', $s->id) }}"
                                                                method="post" class="d-inline">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button class="btn btn-sm btn-danger"
                                                                    onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')"
                                                                    type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- penutup tabelnya -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-1').DataTable();
        });
    </script>
@endSection;

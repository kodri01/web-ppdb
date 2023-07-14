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
                        <div class="card-header">
                            <!-- <h4>Basic DataTables</h4> -->
                            <a href="{{ route('add.siswa') }}" type="button"
                                class="btn btn-primary daterange-btn icon-left btn-icon">
                                <i class="fas fa-plus"></i> Tambah Data Siswa
                            </a>
                        </div>
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
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $s)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $s->no_register }}</td>
                                                <td>{{ $s->nama_lengkap }}</td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $s->tgl_lahir)->format('d-m-Y') }}
                                                </td>
                                                <td>{{ $s->jk }}</td>
                                                <td>{{ $s->alamat }}</td>
                                                <td>{{ $s->status == 0 ? 'Tidak Lolos' : 'Lolos' }}
                                                </td>
                                                <td>
                                                    <form action="{{ route('update.siswa', $s->id) }}" method="post"
                                                        class="d-inline">
                                                        @csrf
                                                        <button class="btn btn-sm btn-success"
                                                            type="submit">Seleksi</button>
                                                    </form>
                                                    <form action="{{ route('delete.siswa', $s->id) }}" method="post"
                                                        class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')"
                                                            type="submit">Delete</button>
                                                    </form>
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

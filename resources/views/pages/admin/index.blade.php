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
                            <a href="{{ route('add.admin') }}" type="button"
                                class="btn btn-primary daterange-btn icon-left btn-icon">
                                <i class="fas fa-plus"></i> Tambah Admin
                            </a>
                        </div>
                        <div class="card-body">

                            <!-- tabelnya -->
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admin as $a)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $a->name }}</td>
                                                <td>{{ $a->email }}</td>
                                                <td>
                                                    <a href="{{ route('edit.admin', $a->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    @if ($a->id != 1 && $a->id != auth()->user()->id)
                                                        <form action="{{ route('delete.admin', $a->id) }}" method="post"
                                                            class="d-inline">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')"
                                                                type="submit">Delete</button>
                                                        </form>
                                                    @else
                                                        <div></div>
                                                    @endif
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

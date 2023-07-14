@extends('layouts.admin_main')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users my-4"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Siswa Mendaftar</h4>
                        </div>
                        <div class="card-body">
                            <h2> {{ $siswaDaftar }} </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-users my-4"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Siswa Lolos</h4>
                        </div>

                        <div class="card-body">
                            <h2> {{ $siswaLolos }} </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-users my-4"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Siswa Tidak Lolos</h4>
                        </div>
                        <div class="card-body">
                            <h2> {{ $siswaGagal }} </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- hmm -->

        </div>
    </section>
@endSection;

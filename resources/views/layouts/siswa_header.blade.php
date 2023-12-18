<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ url('assets/img/avatar/icone.png') }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/bootstrap-4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/dataTables/css/dataTables.bootstrap4.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components.css') }}">

    <!-- General JS Scripts -->
    <script src="{{ url('assets/bootstrap-4/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap-4/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap-4/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap-4/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap-4/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/js/stisla.js') }}"></script>
    <script src="{{ url('assets/dataTables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ url('assets/dataTables/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ url('assets/js/scripts.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>

                    </ul>
                    <div>
                        <h4 class="text-white mt-2"><strong>PPDB SD Pelita Raya Kota Jambi</strong></h4>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <!-- klo mau nambah menu notifikasi langsung ke websitenya aja (https://getstisla.com/) -->
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            @if ($siswa->profile != null)
                                <img alt="image" src="{{ asset('uploads/' . $siswa->profile) }}"
                                    style="width: 50px;height:50px;" class="rounded-circle mr-1">
                            @else
                                <img alt="image" src="{{ url('assets/img/avatar/avatar-1.png') }}"
                                    style="width: 50px;height:50px;" class="rounded-circle mr-1">
                            @endif
                            <h5 class="d-sm-none d-lg-inline-block text-capitalize">{{ $siswa->nama_lengkap }} </h5>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                            <a href="{{ route('logout.siswa') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href=""><img src="{{ url('assets/img/avatar/icone.png') }}" alt="LP"
                                width="30px">
                            SD Pelita Raya Jambi</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href=""><img src="{{ url('assets/img/avatar/icone.png') }}" alt="LP"
                                width="47px"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu</li>
                        <li <?php if ($title == 'Dashboard Siswa') {
                            echo 'class="active"';
                        } ?>><a class="nav-link" href="{{ route('dashboard.siswa') }}"><i
                                    class="fas fa-fire"></i>
                                <span>Dashboard</span></a></li>
                        <?php if ($siswa->status == 1 && $siswa->ijazah_tk == null) :  ?>
                        <li <?php if ($title == 'Registrasi Ulang') {
                            echo 'class="active"';
                        } ?>><a class="nav-link" href="{{ route('regist.siswa', $siswa->id) }}"><i
                                    class="fas fa-pen"></i>
                                <span>Registrasi Ulang</span></a></li>

                        <?php elseif  ($siswa->status == 1 && $siswa->bukti_bayar != null) :  ?>
                        <div></div>
                        <?php elseif  ($siswa->status == 0 && $siswa->bukti_bayar == null) :  ?>
                        <li><a class="nav-link" href="{{ route('dashboard.print') }}"><i class="fas fa-print"></i>
                                <span>Cetak Nomor Registrasi</span></a></li>
                        <?php else :  ?>
                        <div></div>
                        <?php endif;  ?>


                    </ul>



                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">

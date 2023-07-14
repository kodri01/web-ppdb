@extends('layouts.main')

@section('content')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <a href=""><img src="assets/img/avatar/icone.png" alt="logo" width="100"
                                    class="shadow-light rounded-circle"></a>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login Admin</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.login') }}" class="needs-validation"
                                    novalidate="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" class="form-control" name="email"
                                            tabindex="1" required autofocus>

                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                    </div>

                                    <div class="form-group text-right">
                                        <a href="{{ route('/') }}" class="float-left mt-3">
                                            <i class="fa fa-arrow-left"></i> Kembali
                                        </a>
                                        <button type="submit" name="loginData"
                                            class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>


                            </div>
                        </div>
                        <center>
                            <div class="container">
                                <div class="copyright">
                                    &copy; <strong><span>Universitas Dinamika Bangsa</span></strong> |
                                    {{ \Carbon\Carbon::now()->year }}
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endSection;

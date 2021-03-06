@extends('layouts.auth.app')
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
    </div>

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        @if(session('message'))
                            <div class="alert alert-{{session('type')}}" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Bienvanido!</h5>
                                        <p>Ingresa Credenciales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" method="post" action="{{route('login.auth')}}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese correo" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese contraceña" required>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Ingresar</button>
                                    </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

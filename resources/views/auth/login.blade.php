@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-0">
            <div class="login-container">
                <h4 id="login-front">Login</h4>
                <form id="loginForm" action="{{ url('/login') }}" method="post">
                    {{ csrf_field() }}
                    <h5>Correo electrónico</h5>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email"
                        placeholder="tu@correo.com" required>
                    </div>
                    <h5>Contraseña</h5>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password"
                        required>
                    </div>
                    <div class="row">
                        <div class="col-8 col-md-6">
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Olvidaste tu contraseña?
                            </a>
                        </div>
                        <div class="col-4 col-md-6">
                            <button class="btn btn-primary float-right" type="submit">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

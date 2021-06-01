@extends('front.layouts.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Login</li>
            </ol>
            <h2>Login</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" style="min-height: 450px">

            <h1>Login</h1>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if (count($errors))
                        @foreach ($errors->all() as $message)
                            {{ $message }}
                        @endforeach
                    @endif

                    <form action="{{ route("user.login") }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="username">Email</label>
                            <input name="email" type="email" id="username" class="form-control" placeholder="Email" value="{{ old('email') }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Contraseña</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="rememberme"> Recordarme</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Login</button>
                    </form>
                    <div class="blankpage-footer text-center">
                        <a href="{{ route("user.password.update") }}"><strong>Recuperar Contraseña</strong></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@extends('layouts.app')
@section('content')
    <div class="content-body row">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="col-md-12 m-4 d-flex justify-content-center">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="mt-1"> Entrar </h3>
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mt-2">
                            <label for="email"> Email </label>
                            <input class="form-control" id="email" type="email" name="email" :value="old('email')"
                                required />
                        </div>

                        <!-- Password -->
                        <div class="mt-2">
                            <label for="password"> Senha </label>
                            <input class="form-control" id="password" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="form-check-label">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <span class="ml-2 text-sm text-gray-600">Manter Login</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-2">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>
                            @endif

                            <button class="btn btn-success ml-4 m-1">
                                Entrar
                            </button>
                        </div>
                    </form>
                    <span>Não tem uma conta? <a href="{{ route('register') }}" class="text-decoration-none">Registre-se</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection

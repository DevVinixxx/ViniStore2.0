@extends('layouts.app')
@section('content')
    <div class="content-body row">
        <div class="col-md-12 m-4 d-flex justify-content-center">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="mt-1">Criar cadastro</h3>
                    <x-auth-validation-errors :errors="$errors" />
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
    
                        <!-- Name -->
                        <div>
                            <label  for="name"> Nome </label>
                            <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
    
                        <!-- Email Address -->
                        <div class="mt-2">
    
                            <label  for="email"> Email </label>
                            <input class="form-control" id="email"  type="email" name="email" :value="old('email')" required />
                        </div>
    
                        <!-- Password -->
                        <div class="mt-2">
                            <label  for="password"> Senha </label>
                            <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password" />
                        </div>
    
                        <!-- Confirm Password -->
                        <div class="mt-2">
                            <label  for="password_confirmation">Confirme sua senha</label>
                            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required />
                        </div>
    
                        <div class="flex items-center justify-end mt-2">
                            <a class="text-decoration-none" href="{{ route('login') }}">
                                Já tem uma conta?
                            </a>
    
                            <button class="btn btn-success ml-4 m-1">
                                Criar cadastro
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

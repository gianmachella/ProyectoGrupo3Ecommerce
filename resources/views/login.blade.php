@extends('layouts.deliciasNana')
@section('content')
  <div class="container">
    <div class="contenedor">
        <form class="login" action="login" method="post">
          @csrf
          <div class="">
            <img src="img/logo.png" alt="" class="logohistoria">
          </div>
          <h2>Login</h2>
          <div class="campo">
            <input class="login-campos" type="email" name="email" value="" placeholder="¿Cual es tu e-mail?" required><br>
          </div>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="campo">
            <input class="login-campos" type="password" name="password" value="" placeholder="Ahora la contraseña" required><br>
          </div>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            <p class="texto">¿Aun no tenés una cuenta? <a href="{{'register'}}">Crear cuenta</a></p>
            <button class="btn" type="submit" name="button">Enviar</button>
        </form>
    </div>
  </div>

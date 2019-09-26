@extends('layouts.deliciasNana')
@section('content')
  <div class="container">
    <div class="contenedor">

        <form class="login" action="register" method="post" novalidate enctype="multipart/form-data">
          @csrf
          <div class="">
            <img src="img/logo.png" alt="" class="logohistoria">
          </div>
          <h2>Registrarme</h2>
          <div class="campo">
            <input class="login-campos" type="text" name="name" value="" placeholder="Decinos tu Nombre" required><br>
            <span class="" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          </div>

          <div class="campo">
            <input class="login-campos" type="text" name="last_name" value="" placeholder="Decinos tu Apellido" required><br>
            <span class="" role="alert">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
          </div>
          <div class="campo">
            <input class="login-campos" type="email" name="email" value="" placeholder="Decinos tu e-mail" required><br>
            <span class="" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
          </div>
          <div class="campo">
            <input class="login-campos" type="text" name="phone" value="" placeholder="Decinos tu Numero de Telefono" required><br>
            <span class="" role="alert">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
          </div>
          <div class="campo">
            <input class="login-campos" type="password" name="password" value="" placeholder="Una contraseña que no te olvides" required><br>
            <span class="" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
          </div>
          <div class="campo">
            <input class="login-campos" type="password" name="password_confirmation" value="" placeholder="Ahora repetí contraseña" required><br>
          </div>
          <div class="campo" >
              <span>Dejanos tu foto:</span><input class="login-campos" name="photo" type="file">
          </div>
          <p class="texto">¿Ya tenés una cuenta? <a href="{{'login'}}">Loguearme</a></p>
          <button class="btn" type="submit" name="button">Enviar</button>
        </form>
    </div>
  </div>

@extends('layouts.deliciasNana')
@section('content')
  <div class="container">
    <div class="contenedor" >
        <form class="login" action="formulario.html" method="post">
          <h2>Contacto</h2>
          <div class="campo">
            <input class="login-campos" type="text" name="nombre" value="" placeholder="Decinos tu Nombre" required><br>
          </div>
          <div class="campo">
            <input class="login-campos" type="text" name="apellido" value="" placeholder="Decinos tu Apellido" required><br>
          </div>
          <div class="campo">
            <input class="login-campos" type="email" name="email" value="" placeholder="Decinos tu e-mail" required><br>
          </div>
          <div class="campo">
            <input class="login-campos" type="text" name="email" value="" placeholder="Decinos tu Numero de Telefono" required><br>
          </div>
          <div class="campo">
            <input type="text" name="comentarios" class="cajatext" value="" placeholder="Dejanos tus comentarios">
          </div>
          <button class="btn" type="submit" name="button">Enviar</button>

        </form>
    </div>
  </div>

@extends('layouts.deliciasNana')

@section('content')
<div class="container">
      <div class="contenedor">
          <form class="login" action="productos" method="post" enctype="multipart/form-data">
           @csrf

            <h2>Cargar producto</h2>

            <div class="campo">
              <input class="login-campos" type="text" name="name"  placeholder="Nombre del producto"><br>
            </div>


            <div class="campo">
              <input class="login-campos" type="text" name="description1"  placeholder="Descripción 1"><br>

            </div>

            <div class="campo">
              <input class="login-campos" type="text" name="description2" placeholder="Descripcion 2"><br>
            </div>

            <div class="campo">
              <input class="login-campos" type="text" name="price" placeholder="Precio"><br>

            </div>

            <div class="campo">
              <input class="login-campos" type="text" name="stock" placeholder="Cantidad de Stock"><br>

            </div>

            <div class="campo" >
                <span>Imagen del Producto:</span><input class="login-campos" name="photo" type="file" placeholder="imagen">
            </div>
            <button class="btn" type="submit" name="button">Cargar</button>
          </form>
      </div>
    </div>
@endsection

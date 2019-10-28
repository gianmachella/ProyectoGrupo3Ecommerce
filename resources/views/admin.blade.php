@extends('layouts.deliciasNana')
@section('content')
<div class="container" id="admin" >
  <div class="cont-secundario ml-auto mr-auto">
    <div class="row justify-content-end">
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-body">
              <a href="cargaDeProductos"><h5 class="card-title">Carga de Productos</h5></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-body">
              <a href="listadoDeProductos"><h5 class="card-title">Listado de Productos</h5></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card text-center">
            <div class="card-body">
              <a href="listadoDeUsuarios"><h5 class="card-title">Listado de Usuarios</h5></a>
            </div>
          </div>
        </div>
      </div>
  </div>
  <h2 class="admin">Panel del Administrador</h2>
</div>
@endsection

@extends('layouts.deliciasNana')
@section('content')
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <h3>Listado de Productos Activos</h3>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col"> </th>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descrición 1</th>
                  <th scope="col">Descrición 2</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Stock</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($productos as $producto)
                    <tr>
                      <td><img src="{{Storage::url($producto->photo)}}" alt="" class="nav-icon1"></td>
                      <td>{{$producto->id}}</td>
                      <td>{{$producto->name}}</td>
                      <td>{{$producto->description1}}</td>
                      <td>{{$producto->description2}}</td>
                      <td>{{$producto->price}}</td>
                      <td>{{$producto->stock}}</td>
                      <td>

                        <a href="#"><i class="fas fa-user-edit" class="btn btn-dager" data-toggle="modal" data-target="#"></i></a>
                        <a href="#"><i class="fas fa-trash-alt"></i></a>

                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
@endsection

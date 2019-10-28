@extends('layouts.deliciasNana')
@section('content')
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">
            <h3>Listado de Usuarios Registrados</h3>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col"> </th>
                  <th scope="col">ID</th>
                  <th scope="col">Role</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Email</th>
                  <th scope="col">Teléfono</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                    <tr>
                      <td><img src="{{Storage::url($user->user_pic)}}" alt="" class="nav-icon1"></td>
                      <td>{{$user->id}}</td>
                      <td>{{$user->role}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->last_name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->phone}}</td>
                      <td>

                        <a href="#"><i class="fas fa-user-edit" class="btn btn-dager" data-toggle="modal" data-target="#editUser{{$user->id}}"></i></a>
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

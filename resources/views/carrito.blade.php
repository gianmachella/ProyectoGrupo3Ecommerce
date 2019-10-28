@extends('layouts.deliciasNana')
@section('content')
  <div class="carrito">
    <h1> Hola, {{{ Auth::user()->name}}}, este es tu pedido.</h1>
  </div>
  
@endsection

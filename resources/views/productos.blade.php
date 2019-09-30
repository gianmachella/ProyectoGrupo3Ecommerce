@extends('layouts.deliciasNana')
@section('content')
    <div class="container" id="productos">
      <div class="cont-productos ml-auto mr-auto">
        <div class="row">

        @foreach ($productos as $producto)
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">{{$producto->name}}</h5>
                <p class="card-text">{{$producto->description1}}</p>
                  <h3><span>$</span>{{$producto->price}}</h3>
                <button href="#product" class="btn btn-primary btn-lg btn-block" type="submit" name="button" data-toggle="modal">Miralo</button>
              </div>
            </div>
          </div>
          <!--Modal-->
          <div class="modal" id="modal" >
            <div class="modal-de-compra">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">&times;</button>
              <div class="container1">
                <img src= "{{$producto->photo}}" alt="">
                <p>{{$producto->description2}}</p>
              </div>
              <div class="container2">
                <h3>{{$producto->name}}</h3>
                <hr style="border: 1px inset;width:90%;">
                <p class="description1">{{$producto->description1}}</p>
                <hr style="border: 1px inset;width:90%;">
                <h4>${{$producto->price}}  c/u</h4>
                <span>Cantidad <input class="contador" type="number" name="numero" value="1" min="0" max="50" step="1"></span>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="button">Comprar</button>
              </div>
            </div>
          </div>
          @endforeach

          </div>
        </div>
      </div>
@endsection

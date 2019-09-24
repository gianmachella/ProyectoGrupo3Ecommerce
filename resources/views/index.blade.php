@include ('menu')
@include ('head')
<body>
    <div class="container">
      <div class="cont-central">
        <div class="mensaje-bienvenida">
          <div class="caja">
            <img src="img/caja.png" alt="marco" id="caja">
            <img src="img/logo.png" alt="marco" class="logoimg">
            <div class="bienvenida">
              <p>En Delicias Nana nos dedicamos a la pastelería artesanal con un sabor único y delicioso al combinar lo mejor de pasteleria venezolana con la Argentina. Además, decoramos tortas con sabores y temáticas personalizados. Y realizamos talleres de mini pasteleros para los pequeños de la casa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cont-secundario ml-auto mr-auto">
        <div class="row">
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Horario</h5>
                  <p class="card-text">Lunes a Sabado <br>
                    9:00 - 18:00</p>
                </div>
              </div>
            </div>
            <br>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Pedidos</h5>
                  <p class="card-text">Realizar pedidos <br>
                    con anticipación</p>
                </div>
              </div>
            </div>
            <br>
              <div class="col-sm-4">
                <div class="card text-center">
                  <div class="card-body">
                    <h5 class="card-title">San Cristobal</h5>
                    <p class="card-text">Buenos Aires <br> Argentina</p>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
      @include ('footer')

      <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

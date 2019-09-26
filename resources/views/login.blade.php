@include ('menu')
@include ('head')
<body>
  <div class="container">
    <div class="contenedor">
        <form class="login" action="login" method="post">
          @csrf
          <div class="">
            <img src="img/logo.png" alt="" class="logohistoria">
          </div>
          <h2>Login</h2>
          <div class="campo">
            <input class="login-campos" type="email" name="usuario" value="" placeholder="¿Cual es tu e-mail?" required><br>
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
  @include ('footer')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

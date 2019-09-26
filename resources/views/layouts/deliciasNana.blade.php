<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--fondos de letras-->
    <!--
    <script src="https://kit.fontawesome.com/0647937430.js"></script>
    -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Poiret+One|Courgette&display|Dancing+Script|Rochester|Calligraffitti|Sacramento&display=swap" rel="stylesheet">

    <!--enlace de bostrapp-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--enlace de hoja CSS-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--enlace de JS-->
    <!--
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    -->
    <script type="text/javascript" src="js/style.js"></script>
    <!--titulo que aparecera en la pestana-->
    <title>Delicias Nana</title>
  </head>
  <body>
    <header>
      @include('layouts.menu')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
      @include('layouts.footer')
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

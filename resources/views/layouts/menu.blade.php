<header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--iconos dentro del menu desplegable-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <a href="{{'inicio'}}"><img src="img/logo.png" alt="marco" class="logo-menu"></a>
          <ul class="navbar-nav mr-auto mt-4 mt-lg-auto">
            <li class="nav-item active">
              <a class="navbar-brand" href="{{'inicio'}}">Home <span class="sr-only"></a>
            </li>
            <li class="nav-item active">
              <a class="navbar-brand" href="{{'historia'}}">Historia <span class="sr-only"></a>
            </li>
            <li class="nav-item active">
              <a class="navbar-brand" href="{{'productos'}}">Productos <span class="sr-only"></a>
            </li>
            <li class="nav-item active">
              <a class="navbar-brand" href="{{'faqs'}}">FAQS <span class="sr-only"></a>
            </li>
            <li class="nav-item active">
              <a class="navbar-brand" href="{{'contacto'}}">Contactos <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <!--iconos de la izquierda no desplegable-->
        <div class="navbar ml-auto">
          <a class="navbar-brand" href="https://www.facebook.com/Delicias-Nana-152602465221118/?ref=br_rs"><img src="img/faceicon.png" alt="" class="nav-icon1"></a>
          <a class="navbar-brand" href="https://www.instagram.com/deliciasnana_buenosaires/?hl=es-la"><img src="img/insticon.png" alt="" class="nav-icon1"></a>
          <a class="navbar-brand" href="#"><img src="img/cesta.png" alt="" class="nav-icon1"></a>
          @auth
             <span class="navbar-brand">Hola {{{ Auth::user()->name}}}</span>
             <a class="navbar-brand"><img src="{{Storage::url(Auth::user()->photo)}}" alt="" alt="" class="nav-icon1"></a>
             <a class="navbar-brand" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
          @endauth
          @guest
             <span class="text-login"><a href="{{'login'}}">Login/</a><a href="{{'register'}}">Registro</a></span>
             <a class="navbar-brand"><img src="img/login.png" alt="" alt="" class="nav-icon1"></a>
          @endguest
        </div>
      </nav>
  </header>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
      <nav class="navbar"> <!-- is-transparent -->
        <div class="container is-fluid">
          <div class="navbar-brand">
            <a class="navbar-item" href="{{route('home')}}">
              <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer logo">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        
          <div id="navbarExampleTransparentExample" class="navbar-menu">

            <div class="navbar-start">
              <a class="navbar-item" >
                Learn
              </a>
              <a class="navbar-item">
                Discuss
              </a>
              <a class="navbar-item">
                Share
              </a>
            </div> <!-- navbar-start -->

            <!-- Prawa strona -->
            <div class="navbar-end">
              @if (Auth::guest())
                <a href="{{route('login')}}" class="navbar-item">Login</a>
                <a href="{{route('register')}}" class="navbar-item">Join the Community</a>
              @else
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="/documentation/overview/start/">
                  Hey 
                </a>
                <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" href="/documentation/overview/start/">
                    <span class="icon">
                        <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                      </span>Profile
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                    <span class="icon">
                        <i class="fa fa-fw fa-bell m-r-5"></i>
                      </span>Notifications
                  </a>
                  <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                    <span class="icon">
                        <i class="fa fa-fw fa-cog m-r-5"></i>
                      </span>Settings
                  </a>
                  <hr class="navbar-divider">
                  <a class="navbar-item" href="{{route('logout')}}" 
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    <span class="icon">
                      <i class="fa fa-fw fa-sign-out m-r-5"></i>
                    </span>
                      Logout
                  </a>
                </div>
              </div>
              @endif
            </div> <!-- navbar-end -->
            
          </div> <!-- navbarExampleTransparentExample -->
  
        </div> <!-- Continer -->
      </nav>

<section class="hero is-light">
<div class="hero-body">
    <p class="title">
    @yield('content')
    </p>
    <p class="subtitle">
      _
    </p>
  </div>



  
  
</section>
   
  </div>
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
   @yield('headers')
    <title>Secugraphy</title>
    <link rel = "stylesheet" href = "{{ asset('css/app.css') }}"/>

      <nav class = "black">
    <div class="nav-wrapper container ">
      <a  class="brand-logo light-green-text text-accent-2 ">Secugraphy</a>
    </div>
  </nav>


</head>
<body>
<main>
    <div class = "container" id = "app">
        @yield('main')
    </div>
</main>
</body>
        <footer class="page-footer  black">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Secugraphy</h5>
                <p class="grey-text text-lighten-4 " style="font-family: sans-serif; word-break: break-word">Emplementing a simple approaches to encrypt and dycript the text with a different complixty levels.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">
                  <a class="grey-text text-lighten-3" target = "_blank" href="https://github.com/mamr-moussa/secugraphy">
                    <span class = "knocks-brand84"></span> Github Repository
                  </a>
                </h5>
                <ul>
                
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright green">
            <div class="container " style="font-family: sans-serif;">
            © 2018 Copyright Muhammad Amr, Future University In Egypt
              
            </div>
          </div>
        </footer>

<script src="{{asset('js/app.js')}}"></script>
</html>
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
          <p class="grey-text text-lighten-4 " style="font-family: sans-serif; word-break: break-word; font-weight: 300">Emplementing a simple approaches to encrypt and dycript the text with a different complixty levels.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">
          <a class="grey-text text-lighten-3" target = "_blank" href="https://github.com/mamr-moussa/secugraphy">
            <span class = "knocks-brand84"></span> Github Repository
          </a>
          </h5>
          <p style="font-family: sans-serif;">Workspace</p>
          <ul id = "footer_list">
            <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/resources/assets/js/app.js" style="font-size: 120%; font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-brand119 knocks_icon"></span> <span style="font-family: sans-serif;">Script</span>
              </a>
            </li>
            <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/public/js/map.js" style="font-size: 120%;font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-sitemap red-text knocks_icon"></span> <span style="font-family: sans-serif;">Characters Map</span>
              </a>
            </li>
                        <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/resources/assets/sass/app.scss" style="font-size: 120%;font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-brand44 red-text knocks_icon"></span> <span style="font-family: sans-serif;">Stylesheets</span>
              </a>
            </li>
            <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/resources/views/welcome.blade.php" style="font-size: 120%;font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-brand110 red-text knocks_icon"></span> <span style="font-family: sans-serif;">Templates</span>
              </a>
            </li>
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
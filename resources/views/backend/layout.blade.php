
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('backend.components.links')
</head>
<body>
    <div class="loader"></div>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
         <!-- Navigation -->
         @include('backend.components.nav')

         <!-- Sidebar -->
        @include('backend.components.sidebar')
        <!-- Main Content -->
        @yield('main')
        <!-- Settings -->
        @include('backend.components.sidesetting')
        <!-- Footer -->
        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="#">Redstar</a>
          </div>
          <div class="footer-right">
          </div>
        </footer>
        
      </div>
    </div>
    <!--  JS Scripts -->
    @include('backend.components.scripts')
  </body>
</html>
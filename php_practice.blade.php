<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
  <head>
      <title> PHP Practice - @yield('title')</title>
  </head>
  <body>
      <?php echo "My first Php script!";?>
      @section('sidebar')
        This is the master sidebar.
      @show
      <div class="container">
          @yield('content')
      </div>
  </body>
</html>

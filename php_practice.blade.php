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
      <div class="container">
          @yield('more content')
      </div>
      @extends('view')
      @section('title', 'Page Title')
      @section('sidebar')
        @parent
          <p> This is appended to the master sidebar.</p>
      @endsection
        
      @endsection
  </body>
</html>

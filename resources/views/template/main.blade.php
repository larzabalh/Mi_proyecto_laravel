<!DOCTYPE html>
<html>
  <head>
    @include('template.meta')

  </head>
  <body>
<div id="wrapper">
  @include('template.nav')


    @yield('content')
</div>

  @include('template.footer')
  @yield('java')




  </body>
</html>

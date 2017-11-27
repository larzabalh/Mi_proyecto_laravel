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

  @yield('script')
  @include('template.footer')



  </body>
</html>

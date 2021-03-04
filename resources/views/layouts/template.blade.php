<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @yield('head')
<body>
  <div id="app">
    @yield('navbar')
    @yield('header')
    @yield('main')
    @yield('footer')
  </div>
</body>
</html>
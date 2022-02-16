<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="Description" content="Enter your description here" />
      @include('frontend.components.link')
      <title>News Paper</title>
   </head>
   <body>
      @include('frontend.components.nav')
      <!-- Main Content -->
      @yield('main')
      @include('frontend.components.footer')
      @include('frontend.components.link')
   </body>
</html>
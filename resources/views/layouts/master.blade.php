<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
<body>
     @include("partials.header")
     <main>
         @yield("hero banner")
         @yield("grid card")
         @yield("icon menu")
     </main>
      @include("partials.footer")
</body>
</html>
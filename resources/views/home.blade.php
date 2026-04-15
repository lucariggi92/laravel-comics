<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    @include("partials.header")
    <br>
    @php
    $saluto ="Ciao"
    @endphp
    
    {{$saluto}}
    <br>
      @include("partials.footer")
</body>
</html>
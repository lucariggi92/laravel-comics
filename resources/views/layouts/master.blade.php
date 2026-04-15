<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>

    <style>
        html {
            font-family: sans-serif;
        }

        .card{
            display: inline-block; 

            border: solid 1px black;
            border-radius: 20px;
            padding: 6px;
            
        }


    </style>
</head>
<body>
     @include("partials.header")
         @yield("contenuto")
         @yield("prodotti")
      @include("partials.footer")
</body>
</html>
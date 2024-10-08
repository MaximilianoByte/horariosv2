<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HORARIOS</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                @include("plantilla/menu")
            </div>
    <div class="row">
        <div class="col">
            @yield("contenido2")
        </div>
    </div>
        <div class="row">
        <div class="col">
            @yield("contenido1")
    </div>
</div>
    </div>
    </div>
 
</body>
</html>
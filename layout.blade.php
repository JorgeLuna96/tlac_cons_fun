<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .pagina {
            position: relative;
            height: 100vh;
        }
        .row {
            display: flex;
            margin: 10px 0;
        }

        .noshort {
            flex-shrink: 0;
        }

        .grow {
            flex-grow: 0.1;
        }

        .firma {
            border-bottom: 1px solid black;
            padding: 0 7px;
            display: block;
        }

        .header {
            display: flex;
            justify-content: space-between;
        }

        .header > div {
            text-align: right;
        }

        a {
            text-decoration: none;
            color: black;
        }

        body {
            background-position: center;
            background-repeat: no-repeat;
        }
        .qr {
            width: 15%;
            position: absolute;
            top: 68%;
            left: 82%;
            right: 0;
            bottom: 0;
        }


        @page {
            size: letter landscape;
            margin: 0;
            padding: 0;
        }
        .logo1 {
            position: absolute;
            height: 20%;
            top: 10px;
            left: 29px;
            right: 0;
            bottom: 0;
        }
        .logo2{
            position: absolute;
            height: 20%;
            top: 10px;
            left: 84%;
            right: 0;
            bottom: 0;
        }
        .pie{
            position: absolute;
            width: 100%;
            top: auto;
            right: 0;
            left: 0;
            bottom: 0;


        }
        .costado{
            position: absolute;
            width: 20.1px;
            top: 145px;
            left: 29.49px;
            right: 0;
            bottom: 0;
            z-index: -1;
        }
        .fondo {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .backimg {
            width: 600px;
            z-index: -1;
            opacity: .1;

        }
        .contribuyente {
            display: flex;
        }
        .info {
            font-size: 15px;
        }


        .cuerpo {
            width: 95%;
            border-collapse: collapse;
            text-align: justify
        }
        .giro {
            width: 45%;
            grid-column: 1;
            grid-row: 4;
            border: 1px solid black;

        }
        .fechas {
            border: 1px solid black;
            position: absolute;
            width: 47%;
            top: auto;
            left: 50%;
            right: 0;
            bottom: 37.5%;
        }

        .fecha {
            grid-column: 2;
            grid-row: 1;
        }
        .fehcaTerminacion {
            grid-column: 3;
            grid-row: 1;
        }
        .fechaRenovacion {
            grid-column: 4;
            grid-row: 1;
        }

    </style>
</head>

<body>


<div>
    @yield('content')
</div>


</body>

</html>

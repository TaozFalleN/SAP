<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bootstrap 5 404 page with image</title>
        <link type="text/css" href="{{ asset('assets') }}/css/black-dashboard.min.css?v=1.1.1" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center row">
                <div class="col-md-3 offset-md-2">
                    <img src="{{ ('custom/img/logo_transparente.png') }}" alt="" class="img-fluid">
                </div>
                <div class=" col-md-6 mt-5">
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Ha ocurrido un error</p>
                    <p class="lead">
                        Favor de contactar a la Dirección de Informatica y T.I
                    </p>
                    <a href="https://sistemas.losangeles.cl/" class="btn btn-primary">Ir al portal</a>
                </div>

            </div>
        </div>
    </body>

</html>
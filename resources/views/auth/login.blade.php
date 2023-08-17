

@if(Auth::check())
<script type="text/javascript">
    window.location = "{{ url('/inicio') }}"; //here double curly bracket
</script>
@else

<!DOCTYPE html>
<html lang="es" >
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Css Personalizado -->
    <link rel="stylesheet" href="https://recursos.losangeles.cl/login/assets/css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d1b5388e0f.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <!-- Manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link rel="icon" type="image/jpg" href="https://recursos.losangeles.cl/login/assets/images/svg/favicon-logo.svg"/>
</head>
<body>
  <div class="row p-sm-0 m-0 min-vh-100">

   <!-- Contenedor derecho -->
   <div class="col-12 dg text-light d-flex align-items-md-center justify-content-md-center ">
    <div class="container d-flex justify-content-center">
      <div class="w-50">
        <!-- Escudo + Logo -->
        <div class="d-flex justify-content-center">
          <div class="logo_uno d-none d-md-block"></div>
          <div class="logo_dos d-none d-md-block"></div>
        </div>

        <h1 class="fw-bold fs-2 mt-3  d-none d-md-block text-center">{{ $sistema->sis_descripcion }}</h1>
    </div>
    </div>
  </div>

  <!-- Contenedor izquierdo -->
  <div class="col-12 dg-dos">
    <div class="container">

      <div  class="d-flex justify-content-center ">
        <div class="logo_uno d-md-none mt-3"></div>
      </div>

      <!-- Contenedor formulario -->
      <div class="container bg-light bg-opacity-75 sombra-caja p-5 c-izquierdo-login">
      <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
              <button class="nav-link active me-lg-2 me-md-2 me-sm-0" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Usuario Clave Única</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Administrador</button>
          </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
          <!-- Usuario Clave Unica -->
          <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="mb-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <a href="{{ route('sesion') }}" class="btn btn-primary pe-5 ps-5 pt-2 pb-2" style="background-color: #0F69C4;">
                    <img src="https://recursos.losangeles.cl/login/assets/images/svg/claveunica.svg" alt="Kiwi standing on oval">
                    Iniciar Sesión
                  </a>
              </div>
          </div>

          <!-- Formulario Administrador -->
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <form class="usuario" role="form" method="POST" action="{{ route('doLogin') }}" autocomplete="off">
                  @csrf
                  <div class="mb-3">
                      <label for="usuarioInput" class="form-label"><i class="fa-solid fa-user"></i></label>
                        <input type="text" id="usuarioInput" name="usu_usuario" class="form-control pt-2 pb-2" placeholder="{{ __('Usuario') }}" required>
                      </div>
                      <div class="mb-3">
                        <label for="claveInput" class="form-label"><i class="fa-solid fa-lock"></i></label>
                        <input type="password" name="usu_clave" class="form-control pt-2 pb-2" id="claveInput" placeholder="{{ __('Contraseña') }}" required>
                      </div>
                  <button type="submit" class="btn btn-primary w-100 btn-grad  border-0">Ingresar</button>
              </form>
          </div>
      </div>

       <div class="pt-2 d-flex justify-content-between  pie-form">
          <a href="https://sistemas.losangeles.cl" class="pe-2">Volver al portal</a>
          <a href="https://sistemas.losangeles.cl/PORTAL/recuperar">Recuperar clave</a>
        </div>
      </div>

      <div class="mt-4 rs text-center">
        <p><a href="http://www.losangeles.cl" target="_blank">www.losangeles.cl</a></p>

      <div class="rs__nav">
          <a href="https://es-la.facebook.com/Munilosangeles" target="_blank"><i class="fab fa-facebook-f pe-3"></i></a>
          <a href="https://www.instagram.com/munilosangeles/" target="_blank"><i class="fab fa-instagram pe-3"></i></a>
          <a href="https://twitter.com/munilosangeles" target="_blank"><i class="fab fa-twitter"></i></a>
      </div>

      <div class="text-light pt-3">
        <p style="font-size: .9rem;">
          <span class="d-none d-md-block pb-1">Dirección de Informática y T.I, Sección Desarrollo de Sistemas</span>
          © 2023 Municipalidad de Los Ángeles </p>
      </div>

  </div>
@include('sweetalert::alert') 
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

@endif
@include('modals.perfil_usuario.perfil')

<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
    <div class="navbar-wrapper">
    <div class="navbar-minimize d-inline">
    <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
    <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
    <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
    </button> 
    </div>
    <div class="navbar-toggle d-inline">
    <button type="button" class="navbar-toggler">
    <span class="navbar-toggler-bar bar1"></span>
    <span class="navbar-toggler-bar bar2"></span>
    <span class="navbar-toggler-bar bar3"></span>
    </button>
    </div>
    <a class="navbar-brand" href="javascript:void(0)">{{ preg_replace('/(?=[A-Z])/', ' $0', Route::current()->getName()) }}</a>

    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
    <ul class="navbar-nav ml-auto">
    <li class="dropdown nav-item">
        <a href="javascript:void(0)" data-toggle="modal" data-target="#perfilModal" class="dropdown-toggle nav-link">
            <i class="fas fa-user fa-lg"></i>
            &nbsp Perfil
        </a>
    </li>
    <li class="dropdown nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); logout('{{ route('logout') }}');" class="dropdown-toggle nav-link">
            <i class="fas fa-sign-out fa-lg"></i>
            &nbsp Cerrar Sesión
        </a>
    </li>
    <li class="separator d-lg-none"></li>
    </ul>
    </div>
    </div>
</nav>

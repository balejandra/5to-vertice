<div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3" type="button"
        onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
        <svg class="icon icon-lg">
            <use xlink:href="{{ asset('assets/@coreui/icons/svg/free.svg') }}#cil-menu"></use>
        </svg>
    </button>
    <a class="header-brand d-md-none" href="#">
        <img width="118" height="46" src="{{ asset('images/logo-transporte.png') }}" alt="">
    </a>
    <ul class="header-nav d-none d-md-flex">
        <strong class="titulo-princ">Sistema de Gestión de Proyectos 5to Vertice</strong>
    </ul>

    <ul class="header-nav ms-3">
        <li class="nav-item dropdown" title="Notificaciones">
            <a href="{{ route('notificaciones.index') }}" class="btn btn-sm btn-outline-secondary">
                <i class="fa fa-bell title-inea"></i>
                @if (session('notificaciones') > 0 && session('notificaciones') <= 99)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ session('notificaciones') }}
                        <span class="visually-hidden">Nueva Notificación</span>
                    </span>
                @elseif(session('notificaciones') != 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        +3
                        <span class="visually-hidden">Nueva Notificación</span>
                    </span>
                @endif
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle py-0" data-coreui-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">

                {{ Auth::user()->email }}

            </a>

            <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">
                        Notificaciones
                    </div>
                </div>
                <a class="dropdown-item" href="#">
                    <a href="#" class="dropdown-item text-left btn btn-default btn-flat">
                        <i class="fa fa-sheet-plastic icon-profile"></i> Proyectos
                        @if (session('notificacionesProyecto') > 0)
                            <span class="badge badge-sm bg-info ms-2 badge-profile">
                                {{ session('notificacionesProyecto') }}</span>
                        @endif

                    </a>
                    <a href="#" class="dropdown-item text-left btn btn-default btn-flat">
                        <i class="fa-solid fa-gear icon-profile"></i> General
                        @if (session('notificacionesGeneral') > 0)
                            <span class="badge badge-sm bg-secondary ms-2 badge-profile">
                                {{ session('notificacionesGeneral') }}</span>
                        @endif
                    </a>

                </a>
                <div class="dropdown-header bg-light py-2">
                    <div class="fw-semibold">
                        Cuenta
                    </div>
                </div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item text-left btn btn-default btn-flat">
                    <i class="fa-regular fa-user icon-profile "></i> Mi Perfil
                </a>

                <a href="#" class="dropdown-item text-left btn btn-default btn-flat"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock icon-profile"></i> Cerrar Sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
</div>

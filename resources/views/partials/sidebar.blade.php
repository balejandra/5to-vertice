<div class="sidebar-brand d-none d-md-flex">
    <a href="{{ route('dashboard') }}">
        <img class="sidebar-brand-full" src="{{ asset('images/logo-transporte.png') }}" width="80" height="50"
            alt="INEA Logo">
        <img class="sidebar-brand-narrow" src="{{ asset('images/logo-transporte.png') }}" width="30" height="30"
            alt="INEA Logo">
    </a>
</div>
<ul class="sidebar-nav nav-pills" data-coreui="navigation" data-simplebar="">
    @include('partials.menu.menu')
</ul>
<button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>

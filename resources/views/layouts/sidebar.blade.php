<div class="c-sidebar c-sidebar-light c-sidebar-fixed {{ request()->routeIs('app.pos.*') ? '' : 'c-sidebar-lg-show' }}" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <a href="{{ route('home') }}">
            <img class="c-sidebar-brand-full" src="{{ asset('images/logo-dark.png') }}" alt="Site Logo" width="110">
            <img class="c-sidebar-brand-minimized" src="{{ asset('images/logo-dark.png') }}" alt="Site Logo" width="40">
        </a>
    </div>
    <ul class="c-sidebar-nav">
        @include('layouts.menu')
    </ul>
</div>

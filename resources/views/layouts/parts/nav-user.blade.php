<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar" style="background-color: {{ $themes }};">

    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
            <div class="avatar avatar-md"><img class="avatar-img" src="{{ $logos }}" alt="user@email.com') }}"></div>
            HANATEKINDO
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        @foreach($menus as $menu)
        <li class="nav-item"><a class="nav-link" href="{{ $menu['link'] }}">
            <svg class="nav-icon">
                <use xlink:href="dist/vendors/@coreui/icons/svg/free.svg#{{ $menu['icon'] }}"></use>
            </svg> {{ $menu['menu'] }}</a></li>
        @endforeach
        <!-- <li class="nav-item"><a class="nav-link" href="\data\pengajuan">
            <svg class="nav-icon">
                <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-calculator') }}"></use>
            </svg> Pengajuan</a></li> -->
        <!-- <li class="nav-divider"></li> -->
    </ul>

    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
</div>
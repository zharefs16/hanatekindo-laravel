<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>HANATEKINDO</title>
    <link rel="icon" type="image/png" sizes="192x192" href="{{ $logos }}">
    <link rel="manifest" href="{{ URL::asset('dist/assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::asset('dist/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ URL::asset('dist/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('dist/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ URL::asset('dist/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ URL::asset('dist/css/examples.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('dist/js/config.js') }}"></script>
    <script src="{{ URL::asset('dist/js/color-modes.js') }}"></script>
    <link href="{{ URL::asset('dist/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
    @yield('head')
  </head>
  <body>
    
      
      
        @include('layouts.parts.nav-user')
    
      
    
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
            <svg class="icon icon-lg">
              <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
          </button>
          <!-- <ul class="header-nav d-none d-lg-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul> -->
          <!-- <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                </svg></a></li>
          </ul> -->
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button disabled class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                Hi, {{ session('user_fullname') }}
              </button>
            </li>
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <svg class="icon icon-lg theme-icon-active">
                  <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-contrast') }}"></use>
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-sun') }}"></use>
                    </svg>Light
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-moon') }}"></use>
                    </svg>Dark
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    <svg class="icon icon-lg me-3">
                      <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-contrast') }}"></use>
                    </svg>Auto
                  </button>
                </li>
              </ul>
            </li>
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="/storage/photo/default.png" alt="user@email.com') }}"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div>
                  <!-- <a class="dropdown-item" href="#"> <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-task') }}"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-comment-square') }}"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">
                  <div class="fw-semibold">Settings</div>
                </div> -->
                <!-- <a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                  </svg> Profile</a>
                  <a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                  </svg> Settings</a>
                  <a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-credit-card') }}"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a>
                  <a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-file') }}"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span>
                </a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <!-- <a class="dropdown-item" href="/user/detail/">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                  </svg> Profile</a> -->
                  <!-- <a class="dropdown-item" href="/password/form/">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                  </svg> Change Password</a> -->
                  <form action="/apilogout" method="post">
                    @csrf
                  <button type="submit" class="dropdown-item">
                  <svg class="icon me-2">
                    <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                  </svg> Logout</button>
                  </form>
              </div>
            </li>
          </ul>
        </div>
    
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span>
              </li>
            </ol>
          </nav>
        </div>
      </header>
      
      <div class="body flex-grow-1">
            <div class="container-lg px-4">
                <div class="row g-4 mb-4">

                <!-- Main Content -->
                @yield('content')
                <!-- End of Main -->
                
                <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>
      
      <footer class="footer px-4">
        <!-- <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io/product/free-bootstrap-admin-template/">Bootstrap Admin Template</a> © 2024 creativeLabs.</div> -->
        <!-- <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div> -->
      </footer>
    </div>

    <script>
        document.querySelector("#form").addEventListener("keydown", (evt) => {
        if (evt.key === "Enter" && !evt.target.matches("textarea")) {
            evt.preventDefault(); // Don't trigger form submit
            $('#staticBackdropLive').modal('show');
            // e.preventDefault();
        }
        });
    </script>

    <!-- Plugins and scripts required by this view-->
    <script src="{{ URL::asset('dist/js/popovers.js') }}"></script>
    <script src="{{ URL::asset('dist/js/tooltips.js') }}"></script>


    <!-- CoreUI and necessary plugins-->
    <script src="{{ URL::asset('dist/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('dist/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <script>
      const header = document.querySelector('header.header');

      document.addEventListener('scroll', () => {
        if (header) {
          header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
        }
      });
    </script>
    
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

<script>
      function showPassword() {
        var x = document.getElementsByClassName("passwords");
        // console.log(x)
        for (let i = 0; i < x.length; i++) {
          if (x[i].type === "password") {
            x[i].type = "text";
          } else {
            x[i].type = "password";
          }
        }
      }
    </script>

    <!-- Plugins and scripts required by this view-->
    <script src="{{ URL::asset('dist/vendors/chart.js/js/chart.umd.js') }}"></script>
    <script src="{{ URL::asset('dist/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ URL::asset('dist/vendors/@coreui/utils/js/index.js') }}"></script>
    <script src="{{ URL::asset('dist/js/main.js') }}"></script>
    <link href="{{ URL::asset('dist/vendors/@coreui/icons/css/free.min.css') }}" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.css" rel="stylesheet"> -->
    <!-- <script src="https://cdn.datatables.net/v/dt/dt-2.1.5/datatables.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
    </script>

@yield('foot')  
</body>
</html>
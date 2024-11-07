<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="HANATEKINDO">
    <meta name="author" content="Reffa Putra Utama">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Login</title>
    <link rel="manifest" href="{{ URL::asset('dist/assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ $logos }}">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ URL::asset('dist/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('dist/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ URL::asset('dist/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ URL::asset('dist/css/examples.css') }}" rel="stylesheet">
    <link rel="canonical" href="https://coreui.io/docs/components/toasts/">
    
    <!-- <script src="{{ URL::asset('dist/js/color-modes.js') }}"></script> -->
    <script src="{{ URL::asset('dist/js/toasts.js') }}"></script>
    <script src="{{ URL::asset('dist/js/config.js') }}"></script>
    <!-- <script src="{{ URL::asset('dist/js/color-modes.js') }}"></script> -->
  </head>
  <body>

  

    <div class="min-vh-100 d-flex flex-row align-items-center"  style='background-image: url("{{ $backgrounds }}");background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;'>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="text-center"><img style="max-width: 30%;" class="avatar-img" src="{{ $logos }}" alt="user@email.com') }}"></div>
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
              @if(session()->has('loginError'))
              <div class="alert alert-danger alert-dismissible" role="alert">
                <div>{{ session('loginError') }}</div>
                <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
                <form action="/apilogin" method="post" class="needs-validation" novalidate="">
                  @csrf
                <div class="card-body">
                  <h1>HANATEKINDO</h1>
                  <p class="text-body-secondary">Silahkan Login</p>
                  <div class="input-group mb-3"><span class="input-group-text" for="validationCustom01">
                      <svg class="icon">
                        <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                      </svg></span>
                    <input required="" value="{{ old('mitra_id') }}" id="validationCustom01" autofocus name="user_email" class="form-control" type="text" placeholder="User ID" autofocus>
                    <div class="invalid-feedback">Please provide User ID.</div>
                  </div>
                  <div class="input-group mb-3"><span class="input-group-text" for="validationCustom02">
                      <svg class="icon">
                        <use xlink:href="{{ URL::asset('dist/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                      </svg></span>
                    <input required="" id="password" name="password" class="form-control passwords" type="password" placeholder="Password">
                    <div class="invalid-feedback">Please provide Password.</div>
                  </div>
                  <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" onclick="showPassword()">
                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">Login</button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Lupa Password?</button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
              
              @if(session()->has('success'))
              <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                  <div class="modal fade" id="staticBackdropLive" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLiveLabel">Informasi</h5>
                          <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <p>{{ session('success') }}.</p>
                          </div>
                          <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                          <a target="_blank" rel="noopener noreferrer" href="/data/print-registrasi/{{ request()->get('mitra_id') }}" class="btn btn-primary" type="button">Cetak Bukti</a>
                          </div>
                      </div>
                      </div>
                  </div>
                  <!-- <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#staticBackdropLive">Launch static backdrop modal</button> -->
                  </div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- import jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Bootstrap Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script type="text/javascript">
          window.onload = () => {
              $('#staticBackdropLive').modal('show');
          }
      </script>
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

  </body>
</html>
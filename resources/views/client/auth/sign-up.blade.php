<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('client/client_style.css') }}">
  </head>
  <body>


    <div class="main" style="width: 50%!important">
        <div class="logo text-center m-3 shadow p-3" style="justify-content: center;position: fixed">
          <img src="{{ asset('web_asset/img/logo.png') }}" alt="" srcset="">
        </div>
        <input type="checkbox" id="chk" aria-hidden="true">

        @if (Session::has('error'))
        <div class="row">
            <div class="col-md-12">
                <div style="position: fixed; text-align: right;z-index:9999" class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">X</span>
                  </button>
                      {{ Session::get('error') }}
                </div>
                
                <script>
                  $(".alert").alert();
                </script>
              
            </div>
          </div>  
        @else
        @endif
    
        <div class="signup">
          <form action="{{ url('store-sign-up') }}" class="form-group"  method="POST">
            @csrf
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="name" name="name" placeholder="Your Full Name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="number" name="phone" placeholder="Phone" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="submit">Sign up</button>
          </form>
        </div>
    
        <div class="login">
          <form action="{{ url('check-log-in') }}" method="POST">
            @csrf
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" minlength="8" name="password" placeholder="Password" required="">
            <button>Login</button>
            <p style="text-align: center"><a href="{{ url('forgot-pasword') }}">Forgot password?</a></p>
          </form>
        </div>
      </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"> --}}
      
  </body>
</html>


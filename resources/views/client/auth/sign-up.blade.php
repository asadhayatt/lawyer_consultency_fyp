<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('client/client_style.css') }}">
  </head>
  <body>


    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
    
        <div class="signup">
          <form action="{{ url('store-sign-up') }}" method="POST">
            @csrf
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="name" name="name" placeholder="Your Full Name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="number" name="phone" placeholder="Phone" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="submit">Sign up</button>
            <p style="text-align: center">Already have an account? Click login</p>
          </form>
        </div>
    
        <div class="login">
          <form>
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <button>Login</button>
            <p style="text-align: center">Don't have an account? Click Sign up</p>
          </form>
        </div>
      </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>
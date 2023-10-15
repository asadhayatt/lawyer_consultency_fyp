<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <section class="m-5">
        <div class="container">
            <div class="row" style="justify-content: center">
                <div class="col-md-8">
                  @if (Session::has('error'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                      </button>
                      <strong>error!</strong>{{ Session::get('error') }}.
                    </div>
                  @else
                    
                  @endif
                    <div class="card text-left">
                      <div class="card-body">
                        <h4 class="card-title">Forgot Password</h4>
                        <p>Code has been sent on your email : {{ $email }}</p>
                        <hr>
                        <form action="{{ url('verify-code') }}" class="form-group mt-3 shadow">
                            @csrf
                            <input type="email" class="form-control mt-3" hidden name="email" value="{{ $email }}">
                            <input type="text" class="form-control mt-3" name="code" placeholder="Enter your code" value="{{ old('email') }}">
                            <input type="password" class="form-control mt-3" name="password" placeholder="Create a new pasword">
                            <button type="submit" class="btn btn-dark m-3">Verify Code</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
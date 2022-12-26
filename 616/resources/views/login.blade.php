<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #7</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container-fluid">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">
          <img src="img/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
             {{-- Error Alert --}}
             @if(session('error'))
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{session('error')}}
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             @enderror
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4"></p>
            </div>
            <form action="{{url('proses_login')}}" method="post">
                {{ csrf_field() }}
                @error('login_gagal')
                    {{-- <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                        <span class="alert-inner--text"><strong>Peringatan!</strong> {{ $message }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
              <div class="form-group first">
                <label for="email">Email</label>
                <input class="form-control" id="email" name="email" type="text" placeholder="Masukkan Email"/>
                @if($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
                @endif

              </div>
              <div class="form-group last mb-4">
                <label for="inputPassword">Password</label>
                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Masukkan Password"/>
                @if($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
                @endif
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>

              <input type="submit" name='submit'value="Log In" class="btn btn-block btn-primary">
              <hr>
              <th><a href="/" class="btn btn-block btn-dark">Kembali</a></th>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/login/jquery-3.3.1.min.js"></script>
    <script src="js/login/popper.min.js"></script>
    <script src="js/login/bootstrap.min.js"></script>
    <script src="js/login/main.js"></script>
  </body>
</html>
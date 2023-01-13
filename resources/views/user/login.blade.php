<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <link rel="stylesheet" href="{{ URL::to('/assets/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">
      <a class="navbar-brand ms-5 ps-4" href="#">
        <img class="img-fluid mt-4" height="5" width="100" src="../assets/images/E-Learning(1).png" alt="logo.png">
      </a>
    </div>

    <div class="container-fluid mb-5">
      <div class="row">
 
        <div class="col-6 text-center mt-3">
          <img class="img-fluid" width="700" src="../assets/images/sign-in.png" alt="">
        </div>

        <div class="col-6">
          <div class="form">
            <p class="h1">Sign in to E-Learning</p>
            <p class="noAccount-text">No Account? &nbsp <a class="sign-up-link" href="/register">Register here!</a><p>
            <form action="{{ route('sample.validate_login') }}" method="post">
              @csrf
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control mb-1" placeholder="email12@gmail.com" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control mb-1" placeholder="Password" required>
                <a class="forget-pass float-end" href="">Forget Password?</a>
              </div>
              <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form>
          </div>
        </div>

      </div>
    </div>
</body>
</html>
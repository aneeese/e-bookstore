<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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

  <div class="mb-5">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 ps-4" href="#">
        <img class="img-fluid mt-4" height="5" width="100" src="../assets/images/E-Learning(1).png" alt="logo.png">
      </a>
    </div>
  
    <div class="container-fluid">
      <div class="row">
  
        <div class="col-6 mt-3">
          <img class="img-fluid pt-5" src="../assets/images/sign-up.png" alt="">
        </div>
  
        <div class="col-6 mb-5">
          <div class="form">
            <p class="h1">Sign up to E-Learning</p>
            <p class="noAccount-text">Have an Account? &nbsp <a class="sign-up-link" href="./login">Sign in!</a><p>
            <form action="{{ route('sample.validate_registration') }}" method="post" onsubmit="return validation();">
              @csrf
              <div>
                <div class="row">
                  <div class="col-12 mb-2">
                    <label class="form-label"><b>Full Name</b></label>
                    <input type="text" name="name" class="form-control" placeholder="Joe Dean" required>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-12 mb-2">
                    <label class="form-label"><b>Email</b></label>
                    <input type="email" name="email" class="form-control" placeholder="joeWoe@gmail.com" required>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-6 mb-2">
                    <label class="form-label"><b>Gender</b></label> <br>
                    <input class="form-check-input me-1" type="radio" name="gender" value="m" checked/>Male
                    <input class="form-check-input ms-4 me-1" type="radio" name="gender" value="f" />Female
                  </div>
                  <div class="col-6 mb-2">
                    <label for="dob" class="form-label"><b>Date of Birth</b></label>
                    <input type="date" name="dob" class="form-control" id="dob" max="2018-01-10" required>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-6 mb-2">
                    <label class="form-label"><b>Password</b></label>
                    <input type="password" id="pass_1" name="password" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                  </div>
                  <div class="col-6 mb-2">
                    <label class="form-label"><b>Confirm Password</b></label>
                    <input type="password" id="pass_2" name="userPass" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <p id="pp" class="text-danger"></p>
                  </div>
                </div>
              </div>
              
              <button class="btn btn-lg btn-primary mb-5" type="submit">Register</button>
            </form>
            <script>
              function validation() {
                if (document.getElementById("pass_1").value !== document.getElementById("pass_2").value) {
                  alert("Passwords does not match! Try again with same password!")
                }
              }
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
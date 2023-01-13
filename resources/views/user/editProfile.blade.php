<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <link rel="stylesheet" href="{{ URL::to('/assets/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

            <a class="navbar-brand ms-3" href="#">
                <img class="img-fluid mt-4" height="7" width="120" src="../assets/images/E-Learning(1).png" alt="logo.png">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link pe-4" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-4" href="/upload">Upload</a>
                </li>
                </ul>
            </div>
        </nav>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold">Edogaru</span>
                        <span class="text-black-50">edogaru@mail.com</span>
                    </div>
                </div>
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex mb-3">
                            <h4 class="text-right"><b>Update Profile</b></h4>
                        </div>
                        <form action="{{ route('sample.update_user') }}" method="post" onsubmit="return validation();">
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
                                    <input type="date" name="dob" class="form-control" max="2018-01-10" id="dob">
                                </div>
                                </div>
                
                                <div class="row">
                                <div class="col-6 mb-2">
                                    <label class="form-label"><b>Update Password</b></label>
                                    <input type="password" name="password" id='pass_1' class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
                                </div>
                                <div class="col-6 mb-2">
                                    <label class="form-label"><b>Confirm Password</b></label>
                                    <input type="password" name="userPass" id='pass_2' class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
                                </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-8">
                                    <button class="btn btn-primary" type="submit">Save Profile</button>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-primary back-btn" type="button"><a href="/home" style="color: white;">Go Back</a></button>
                                </div>
                            </div>
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
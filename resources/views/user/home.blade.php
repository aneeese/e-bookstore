<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2ee0db640a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::to('/assets/css/home.css') }}">
</head>
<body>
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
              <a class="nav-link pe-4 active" aria-current="page" href="/home">Home</a>
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

          <div class="dropdown dropstart">
            <a href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img class="profile-pic" src="../assets/images/main-pic.png" alt="unplash"></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li>
                <a href="user/editProfile" class="sub-menu-link" role="button">
                  <img src="../assets/images/profile.png" role="button">
                  <p>Edit Profile</p>
                </a>
              </li>
              <li>
                <a href="/user/likedBooks" class="sub-menu-link" role="button">
                  <img src="../assets/images/like.png" role="button">
                  <p>Liked Books</p>
                </a>
              </li>
              <li>
                <a href="/user/upload" class="sub-menu-link" role="button">
                  <img src="../assets/images/upload.png" role="button">
                  <p>Uploads</p>
                </a>
              </li>
              <li>
                <a href="{{ route('logout') }}" class="sub-menu-link" role="button">
                  <img src="../assets/images/logout.png" role="button">
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <div class="nav-categories">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item pe-5">
              <a class="nav-link category" href="{{ url('computer') }}" aria-selected="true" onclick="change()">Computer</a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link category" href="{{ url('physics') }}" aria-selected="false">Physics</a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link category" href="{{ url('medical') }}" aria-selected="false">Medical</a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link category" href="{{ url('history') }}" aria-selected="false">History</a>
            </li>
        </ul>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 m-1 mb-4">
      @foreach($books as $book)
        <div class="col">
          <div class="card">
            <img src="{{ asset('storage/images/'. $book -> coverPic) }}" class="card-img-top" alt="book-img">
            <div class="card-body">
              @if (in_array($book -> id, $likedBooks))
                <a class="card-action clicked-btn" href="{{ url('like/'.$book -> id) }}" id="{{ $book -> id }}" onclick="func(this.id)"><i class="fa fa-heart"></i></a>
              @else
                <a class="card-action" href="{{ url('like/'.$book -> id) }}" id="{{ $book -> id }}" onclick="func(this.id)"><i class="fa fa-heart"></i></a>
              @endif
              <h5 class="card-title">{{ $book -> title }}</h5>
              <p class="card-text">{{ $book -> description }}</p>
              <a href="{{ url('read/'.$book -> bookFile) }}"> <button class="btn btn-outline-info float-start"><i class="fa-solid fa-book-open-reader"></i>&nbsp Read</button></a>
              <a href="{{ url('download/'.$book -> bookFile) }}"><button class="btn btn-success float-end"><i class="fa-solid fa-file-arrow-down"></i>&nbsp Download</button></a>
            </div>
          </div>
        </div>
      @endforeach
      <script>
        function func(id) {
          var elem = document.getElementById(id);
          elem.classList.toggle("clicked-btn");
        }
      </script>
    </div>
  </body>
</html>
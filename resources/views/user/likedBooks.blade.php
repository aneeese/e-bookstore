<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liked Books</title>
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ee0db640a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::to('/assets/css/home.css') }}">
    <style>
      .container {
        padding: 2rem 0rem;
      }
      
      h4 {
        margin: 2rem 0rem 1rem;
      }
    </style>
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

        <form class="d-flex ms-4">
          <input class="form-control me-2" type="search" placeholder="Search book" aria-label="Search">
          <button class="btn btn-outline-success me-5" type="submit">Search</button>
        </form>

        <div class="dropdown dropstart">
          <a href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img class="profile-pic" src="../assets/images/main-pic.png" alt="unplash"></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li>
              <a href="/user/editProfile" class="sub-menu-link" role="button">
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
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Book Title</th>
                <th scope="col">Category</th>
                <th scope="col">Likes</th>
              </tr>
            </thead>
            <tbody>
              @for($i = 0; $i < count($liked_books); $i++)
              <tr>
                <th scope="row">{{ $i + 1 }}</th>
                <td>{{ $liked_books[$i] -> title }}</td>
                <td>{{ $liked_books[$i] -> type }}</td>
                <td>{{ $liked_books[$i] -> likes }}</td>
              </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>
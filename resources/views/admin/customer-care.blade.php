<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer - Care</title>
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
              <a class="nav-link pe-4" aria-current="page" href="/admin-home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-4" href="/admin-upload">Upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-4" href="/admin-delete">Delete Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-4 active" href="/customer-care">Customer Care</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <div class="row row-cols-1 row-cols-md-4 g-4 m-1">
      @foreach($reviews as $review)
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $review -> email }}</h5>
              <p class="card-text">{{ $review -> message }}</p>
              <a href="{{ url('deleteReview/'.$review -> id) }}"><button class="btn btn-danger float-end"><i class="fa-solid fa-trash"></i>&nbsp Delete</button></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
        </div>
      </footer>
    </div>
  </body>
</html>
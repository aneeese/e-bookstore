<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            <a class="nav-link pe-4" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pe-4" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pe-4" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pe-4 active" href="/upload">Upload</a>
          </li>
        </ul>

      </div>
  </nav>
    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
    </a>
    <form class="row g-3 form-cust" action="{{ route('sample.validate_book') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Book title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" required>
      </div>
      <div class="col">
        <div class="col-md-4">
          <label for="inputState" class="form-label">Category</label>
          <select id="inputState" name="category" class="form-select" required>
            <option selected>Choose...</option>
            <option>Computer</option>
            <option>Physics</option>
            <option>Medical</option>
            <option>History</option>
          </select>
        </div>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Book description</label>
        <input type="text" name="description" class="form-control" id="inputAddress" placeholder="Short description" required>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="formFile" class="form-label">Upload cover picture</label>
          <input class="form-control" name="coverPic" type="file" accept="image/*" id="formFile" required>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Upload file</label>
          <input class="form-control" name="bookFile" type="file" accept="application/pdf" id="formFile" required>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </form>
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
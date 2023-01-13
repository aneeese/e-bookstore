<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
                <a class="nav-link pe-4" aria-current="page" href="/admin-home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-4" href="/admin-upload">Upload</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-4 active" href="/admin-delete">Delete Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pe-4" href="/customer-care">Customer Care</a>
            </li>
        </ul>
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
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($uploaded_books); $i++)
              <tr>
                <th scope="row">{{ $i + 1 }}</th>
                <td>{{ $uploaded_books[$i] -> title }}</td>
                <td>{{ $uploaded_books[$i] -> type }}</td>
                <td>{{ $uploaded_books[$i] -> likes }}</td>
                <td>
                <a href="{{ url('admindelete/'.$uploaded_books[$i] -> id) }}"><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                </td>
              </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ URL::to('/assets/css/admin-home.css') }}">
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
              <a class="nav-link pe-4 active" aria-current="page" href="/admin-home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-4" href="/admin-upload">Upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-4" href="/admin-delete">Delete Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-4" href="/customer-care">Customer Care</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="card-counter info">
            <i class="fa fa-users"></i>
            <span class="count-numbers">{{ $totalUsers }}</span>
            <span class="count-name">Users</span>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-counter success">
            <i class="fa fa-database"></i>
            <span class="count-numbers">{{ $totalbooks }}</span>
            <span class="count-name">Books</span>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-counter danger">
            <i class="fa fa-question"></i>
            <span class="count-numbers">{{ $totalQueries }}</span>
            <span class="count-name">Reviews</span>
          </div>
        </div>    
      </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="cards-wrapper">
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
            <div class="card">
              <div class="image-wrapper">
                <img src="../assets/images/sign-in.png" class="card-img-top" alt="book-img">
              </div>
              <div class="card-body">
                <h5 class="card-title">Book Title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A neque minima commodi, quae eveniet maiores!</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    

</body>
</html>
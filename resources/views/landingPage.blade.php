<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <link href="../assets/images/E-Learning(1).png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2ee0db640a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::to('/assets/css/landingPage.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 mt-2" href="#">
            <img class="img-fluid" height="7" width="120" src="../assets/images/E-Learning(1).png" alt="logo.png">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-row ms-5 ps-2" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link pad-items ps-4" href="#">Home</a>
                <a class="nav-link pad-items ps-4" href="#about">About</a>
                <a class="nav-link pad-items ps-4" href="#books">Books</a>
                <a class="nav-link pad-items ps-4" href="#reviews">Reviews</a>
                <a class="nav-link pad-items ps-4" href="#contact">Contact Us</a>
            </div>
          </div>
        </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-6 text-area">
          <p class="h1 title-text">Find the book you are looking for easier to read right away.</p>
          <a href="/login"><button class="btn btn-secondary cust-btn btn-lg" type="submit">Login</button></a>
          <a href="/register"><button class="btn btn-secondary cust-btn btn-lg" type="submit">Register</button></a>
        </div>
        <div class="col-6 text-center">
            <img class="img-fluid page-image" src="../assets/images/main-pic.png" alt="main">
        </div>
      </div>
    </div>

    <div class="container-fluid" id="about">
      <p class="h1 text-center m-5 title-text">About Us</p>
      <div class="row">
        <div class="col">
          <img class="img-fluid float-left" src="../assets/images/about.png" alt="">
        </div>
        <div class="col">
          <p class="pe-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis vitae consectetur voluptate dolor. Tempore, consequuntur pariatur error veritatis maiores hic eaque modi sequi sit, odit ipsam optio. Perferendis quibusdam maiores ut vel voluptatibus earum eligendi consectetur, ex fugiat explicabo blanditiis provident, expedita perspiciatis ea? Nulla at libero voluptate eos, ipsum adipisci fugiat beatae est placeat, aperiam cumque. Molestiae neque adipisci, aspernatur voluptatibus libero exercitationem quod dignissimos veritatis magni eaque eligendi aliquam ut minima provident voluptates dolorum. Ex dolor eos voluptatibus nostrum dolore magni similique architecto neque eius deleniti blanditiis ea alias temporibus repellendus, tenetur illo. Quod veritatis ullam repellat ex!</p>
        </div>
      </div>
    </div>

    <div id="books">
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
    </div>

    <div id="reviews">
      <div class="testimonials">
        <div class="inner">
          <h1>Testimonials</h1>
          <div class="border"></div>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col">
                    <div class="testimonial">
                      <img src="../assets/images/testimonials-1.jpg" alt="">
                      <div class="name">Joe Dean</div>
                      <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
        
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col">
                    <div class="testimonial">
                      <img src="../assets/images/testimonials-2.jpg" alt="">
                      <div class="name">Lorem Ipsum</div>
                      <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
        
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col">
                    <div class="testimonial">
                      <img src="../assets/images/testimonials-3.jpg" alt="">
                      <div class="name">Lorem Ipssum</div>
                      <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
        
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="contact">
      <div class="container">
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">Hostel City</div>
              <div class="text-two">Islamabad</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">+0098 9893 5647</div>
              <div class="text-two">+0096 3434 5678</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">ebookstore@gmail.com</div>
              <div class="text-two">info.bookstore@gmail.com</div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
          <form action="{{ route('sample.review') }}" method="post">
            @csrf
            <div class="input-box">
              <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-outline">
              <textarea class="form-control" name="message" placeholder="Message" rows="4" required></textarea>
            </div>
            <div class="button">
              <button class="btn btn-warning" type="submit">Send Now</button>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>

    <footer class="footer-distributed">

      <div class="footer-left">
          <h3>E<span>-Learning</span></h3>

          <p class="footer-links">
              <a href="#">Home</a>
              |
              <a href="#">About</a>
              |
              <a href="#">Contact</a>
          </p>

          <p class="footer-company-name">Copyright © 2022 <strong>E-Learning</strong> All rights reserved</p>
      </div>

      <div class="footer-center">
          <div>
              <i class="fa fa-map-marker"></i>
              <p><span>Islamabad</span>
                  Pakistan</p>
          </div>

          <div>
              <i class="fa fa-phone"></i>
              <p>+92 74**9**258</p>
          </div>
          <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:eLearning.co@gmail.com">xyz@gmail.com</a></p>
          </div>
      </div>
      <div class="footer-right">
          <p class="footer-company-about">
              <span>About the company</span>
              <strong>E-Learning</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, sit expedita. Eveniet!
              lorem,
              Lorem, ipsum dolor.
              Lorem ipsum dolor sit amet consectetur.
          </p>
          <div class="footer-icons">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube"></i></a>
          </div>
      </div>
  </footer>

    
</body>
</html>
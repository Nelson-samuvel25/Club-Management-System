<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark ">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About-Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="clubs.html">Clubs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>

          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Profile
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Edit profile</a></li>
                      <li><a class="dropdown-item" href="#">My clubs</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                  </li>
            </ul>
           
        

          </div>
        </div>
      </nav> 

      <div class="container mt-4 mb-4">
        <h1>Clubs</h1>
        <div class="row">
          <div class="col-lg-4 mt-4 col-md-6 col-sm-12">
            <div class="card" style="width: 18rem;">
              <img src="img/music.avif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="clubs/club1.html" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            </div>
            <div class="col-lg-4 mt-4 col-md-6 col-sm-12">
              <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="clubs/club2.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              </div>

              <div class="col-lg-4 mt-4 col-md-6 col-sm-12">
                <div class="card" style="width: 18rem;">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="clubs/club3.html" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                </div>
                <div class="col-lg-4 mt-4 col-md-6 col-sm-12">
                  <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="clubs/club4.html" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                  </div>
                  <div class="col-lg-4 mt-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                      <img src="..." class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="clubs/club5.html" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                    </div>
                    <div class="col-lg-4 mt-4 col-md-6 col-sm-12">
                      <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="clubs/club6.html" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                      </div>
          </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
  session_start();
  if(isset($_POST['rollNumber'])){
    $rollNumber = $_POST['rollNumber'];
    $password = md5($_POST['password']);
    $query = "SELECT id from users where rollNumber = '$rollNumber' AND password = '$password'";
    $result = query($query);
    if(mysqli_num_rows($result) == 1){
      $_SESSION['rollNumber'] = $rollNumber;
      echo "<script>alert('Login Successfully')</script>";
      header("Location: club");
    }else{
      echo "<script>alert('Login Credentials are not matched')</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../styles/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">KEC Clubs</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../home.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.html">About-Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../clubs.html">Clubs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact.html">Contact</a>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="signup">Signup</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Profile
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Edit profile</a></li>
                <li><a class="dropdown-item" href="#">My clubs</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <div class="login-box">
        <p>Login</p>
        <form action="login" method="POST" enctype="multipart/form-data">
          <div class="user-box">
            <input name="rollNumber" type="text" required autocomplete="off"/>
            <label>Roll Number</label>
          </div>
          <div class="user-box">
            <input name="password" type="password" required/>
            <label>Password</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit"  value="Submit">
          </a>
        </form>
        <p>Don't have an account? <a href="signup.html" class="a2">Sign up!</a></p>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>

        </body>
</html>

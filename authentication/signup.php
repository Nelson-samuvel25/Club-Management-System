<?php
include 'db.php';
  if(isset($_POST['rollNumber'])){
    $rollNumber = $_POST['rollNumber'];
    $emailId = $_POST['emailId'];
    $password = md5($_POST['password']);
    
    $query = "INSERT INTO `users` (`rollNumber`, `emailId`, `password`) VALUES ('$rollNumber', '$emailId', '$password');";
    if(query($query)){
      header("Location: login");
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
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
              <a class="nav-link active" href="../clubs.html">Clubs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact.html">Contact</a>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="login.html">login</a>
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
    <div class="container">
      <div class="login-box mt-4 py-0">
        <p class="mt-2">SignUp</p>
        <form action="signup" method="POST" enctype="multipart/form-data" id="form">
          <div class="user-box">
            <input name="rollNumber" type="text" required autocomplete="off"/>
            <label>Roll Number</label>
          </div>
          <div class="user-box">
            <input name="emailId" type="email" required autocomplete="off"/>
            <label>Email</label>
          </div>
          <div class="user-box">
            <input name="password" type="password" required autocomplete="off"/>
            <label>Password</label>
          </div>
          <div class="user-box">
            <input name="confirmPassword" type="password" required autocomplete="off"/>
            <label>Confirm Password</label>
          </div>
          <div class="error hide-content" id="error"></div>
          <a href="" class="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit"  value="Register">
          </a>
        </form>
        <p>already have an account?<a href="login" class="a2">Login!</a></p>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $('.submit').on('click',function(){
          $("#form").submit();
        });

        $('form').on('submit', function(e){
          if(!valid()) {
            e.preventDefault();
          }
        });
        function valid(){
          $("#error").addClass("hide-content");
          var rollNumber = $('[name=rollNumber]').val();
          var emailId = $('[name=emailId]').val();
          var password = $('[name=password]').val();
          var confirmPassword = $('[name=confirmPassword]').val();
          if(rollNumber == "" || emailID == "" || password == "" || confirmPassword == ""){
            $("#error").html("No Field Should be empty");
            $("#error").removeClass("hide-content");
            return false;
          }
          if(rollNumber != "" || emailID != "" || password != "" || confirmPassword != ""){
            if(password != confirmPassword){
              $("#error").html("Password not matched");
              $("#error").removeClass("hide-content");
              return false;
            }
          }
          return true;
        }
      });
    </script>
  </body>
</html>

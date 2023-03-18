<?php
    session_start();
    // error_reporting(0);
    require 'db/db.php';
    $pageName = str_replace(array("/index.php/", "/index.php","index"), "", "$_SERVER[PHP_SELF]");
    $pageName = $pageName ?: "home";
    $title = ucfirst(preg_replace('/(?<=\w)(?=[A-Z])/',' ',$pageName));
    $page = $pageName.".php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <?php

        if($pageName == "login"){
            session_unset();
            $page = "authentication/".$pageName.".php";
            include "$page";
        }else if($pageName == "signup"){
            $page = "authentication/".$pageName.".php";
            include "$page";
        }else{
            if(!(isset($_SESSION['rollNumber']))){
                header("Location: login");
            }
            include './header.php';
            include "$page";
        }
?>
    <script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        document.title = "<?php echo $title;?>";
        $(".<?php echo $pageName;?>").addClass("active");
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
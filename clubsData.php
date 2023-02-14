<?php
require 'db.php';

// code for creating table for clubDetails
// $createTable = "CREATE TABLE IF NOT EXISTS clubDetails (id INT PRIMARY KEY,clubName VARCHAR(255), clubDesciption text, file text);";

// if(!(mysqli_query($connection, $createTable))){
    //     echo "Table not created";
    //     return;
    // }else{
        //     echo "clubDetails Table Created Successfully";
        // }
        

if(isset($_POST['clubName'])){
   
   
print_r($_POST['clubImage']);

    $clubName = $_POST['clubName'];
    $clubDescription = $_POST['clubDescription'];

    $clubImageName = str_replace(" ", "_", $clubName);
    
    // uploading image code
    $img_name = $_FILES['clubImage']['name'];
	$img_size = $_FILES['clubImage']['size'];
	$tmp_name = $_FILES['clubImage']['tmp_name'];
	$error = $_FILES['clubImage']['error'];

	if ($error === 0) {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = $clubImageName.'.'.$img_ex_lc;
				$image_path = 'club_images/'.$new_img_name;
				move_uploaded_file($tmp_name, $image_path);
			}
	}else {
		$em = "unknown error occurred!";
    echo '<script> alert("'.$error.'");</script>';
	}

    $query = "INSERT INTO clubDetails (clubName, clubDesciption, clubImage) VALUES ('$clubName', '$clubDescription', '$image_path')";

    if(!(mysqli_query($connection, $query))){
        echo "Data not inserted successfully";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Data</title>
</head>
<body>
    <form action="./clubsData.php" method = "POST" enctype="multipart/form-data">
        <input type="text" name="clubName" id="" placeholder="Enter the club name"><br/>
        <textarea name="clubDescription" id="" placeholder="Enter the club description"></textarea><br/>
        <input type="file" id="file" name="clubImage">
        <input class="button" type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

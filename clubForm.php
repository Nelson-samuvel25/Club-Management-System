<?php
if(isset($_POST['submit'])){
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
    echo '<script> alert("'.$em.'");</script>';
	}

    $query = "INSERT INTO clubDetails(clubName, clubDescription, clubImage) VALUES ('$clubName', '$clubDescription', '$image_path')";
    query($query);

}
?>

      <div class="container mt-4">
        
            <div class="card w-50 bg-dark text-light mx-auto">
                <div class="card-body">
                    <form method="POST" action="./clubform" enctype="multipart/form-data">
                        <h2 class="text-center">Club Detail Updation</h2>
                        <div class="form-group py-4">
                            <label for="exampleFormControlFile1" class="fw-bold ">Club image</label>
                            <input type="file" name="clubImage" class="form-control-file ms-4" id="exampleFormControlFile1">
                          </div>
                        <div class="form-group mt-4">
                          <label for="exampleInputPassword1" class="fw-bold">Club title</label>
                          <input type="text" name="clubName" class="form-control mt-3" id="exampleInputPassword1" placeholder="title">
                        </div>
                        <div class="form-group mt-4">
                            <label for="exampleInputPassword1" class="fw-bold">Club info</label>
                            <textarea class="form-control mt-3" name="clubDescription" placeholder="Type here...." id="floatingTextarea2" style="height: 100px"></textarea>
                           
                          </div>
                        <button type="submit" value="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                      </form>
                </div>
            </div>
               
      </div>

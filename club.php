<?php
  require 'db.php';
  $query = "SELECT * from clubDetails";
  $clubDetails = mysqli_query($connection, $query);
?>
    <div class="container mt-4 mb-4">
        <h1>Clubs</h1>
        <div class="row">
            <?php
              if ($clubDetails->num_rows > 0) {
              // output data of each row
              while($row = $clubDetails->fetch_assoc()) {
            ?>
            <div class="col-lg-4 mt-4 col-md-6 col-sm-8">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $row['clubImage'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['clubName'];?></h5>
                        <p class="card-text"><?php print_r(substr($row['clubDesciption'], 0 , 150));?>...</p>
                        <a href="clubs/club2.html" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
            <?php 
                }
              }
            ?>

        </div>
    </div>
    </div>


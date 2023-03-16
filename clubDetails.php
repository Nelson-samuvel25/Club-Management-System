<?php
  $id = $_GET['id'];
  $query = "SELECT * from clubDetails where id= '$id'";
  $clubDetails = query($query);
  if ($clubDetails->num_rows > 0) {
    // output data of each row
    while($row = $clubDetails->fetch_assoc()) {
?>
      <div class="container mt-4 d-flex justify-content-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="club">Home-Clubs</a></li>
            <li class="breadcrumb-item active" aria-current="page"> <a href="clubDetails?id=<?php echo $row['id']?>"> <?php echo $row['clubName'];?></a></li>
          </ol>
        </nav>  
      </div>
      <div class="container">
       
        <div class="row">
          <h1><?php echo $row['clubName'];?></h1>
          <div class="col-lg-9">
              <?php
                print_r($row['clubDescription']);
              ?>
          </div>
          <div class="col-lg-3">
            <img src="<?php echo $row['clubImage'];?>" alt="club image" class="img-fluid rounded">
            <a href="clubRegistration?id=<?php echo $row['id']?>" class="btn btn-primary mt-4 w-100">Join Now</a>
          </div>

        
        </div>
    
        <div class="row mt-4 pt-4">
          <h1 class="text-center" >Club Members</h1>
          <div class="col-lg-3 mt-4">
            <div class="card" style="width: 14rem;">
              <img class="card-img-top" src="../img/person.avif" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">Cras justo odio</li>
                <li class="list-group-item text-center">Dapibus ac facilisis in</li>
                
              </ul>
          
            </div>
          </div>

          <div class="col-lg-3 mt-4">
            <div class="card" style="width: 14rem;">
              <img class="card-img-top" src="../img/person.avif" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">Cras justo odio</li>
                <li class="list-group-item text-center">Dapibus ac facilisis in</li>
                
              </ul>
          
            </div>
          </div>


          <div class="col-lg-3 mt-4">
            <div class="card" style="width: 14rem;">
              <img class="card-img-top" src="../img/person.avif" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">Cras justo odio</li>
                <li class="list-group-item text-center">Dapibus ac facilisis in</li>
                
              </ul>
          
            </div>
          </div>
          <div class="col-lg-3 mt-4">
            <div class="card" style="width: 14rem;">
              <img class="card-img-top" src="../img/person.avif" alt="Card image cap">
              <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">Cras justo odio</li>
                <li class="list-group-item text-center">Dapibus ac facilisis in</li>
                
              </ul>
          
            </div>
          </div>
      </div>
      
   <?php
      
      }
    } else{
      echo "No club is found";
    }
   ?>
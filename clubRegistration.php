<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $rollNumber = $_POST['rollNumber'];
    $emailId = $_POST['emailId'];
    $phoneNumber = $_POST['phoneNumber'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $clubName = $_POST['clubName'];
    $position = $_POST['position'];
    $gender = $_POST['gender'];
    $query = "INSERT INTO `clubRegistration` (`name`, `rollNumber`, `emailId`, `phoneNumber`, `department`, `year`, `club`, `position`, `gender`) VALUES ('$name', '$rollNumber', '$emailId', '$phoneNumber', '$department', '$year', '$clubName', '$position', '$gender');";
    query($query);
  }

  $clubId = $_GET['id'];
  $query =  "SELECT clubName from clubDetails where id='$clubId'";
  $clubDetails = query($query);
  if($row = $clubDetails->fetch_assoc()) {
?>
    <div class="container mt-4">
        <div class="title">Registration</div>
        <div class="content">
          <form action="clubregistration" method="POST">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <span class="details">Roll Number</span>
                <input type="text" name="rollNumber" placeholder="Enter your roll number" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="emailId" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" name="phoneNumber" placeholder="Enter your number" required>
              </div>
              
              <div class="input-box">
                <span class="details">Department</span>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="department">
                <option selected hidden>Department</option>
                <option value="CSE">CSE</option>
                <option value="II">IT</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
              </select>
              </div>
              
              
              
              <div class="input-box">
                <span class="details">Department</span>
                <input type="text" name="department" placeholder="Department Name" required>
              </div>

              <div class="input-box">
                <span class="details">Year</span>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="year">
                <option selected hidden>Year</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
              </select>
              </div>
              
              <div class="input-box">
                <span class="details">Club</span>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="club">
                <option value="<?php echo $clubId;?>" selected><?php echo $row['clubName'];?></option>
              </select>
              </div>
              
              <div class="input-box">
                <span class="details">Position</span>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="position">
                <option selected hidden>Position</option>
                <option value="Secretary">Secretary</option>
                <option value="Join-Secretary">Join-Secretary</option>
                <option value="Tresureur">Tresureur</option>
                <option value="Joint-Tresureur">Joint-Tresureur</option>
                <option value="Club-Member">Club-Member</option>
              </select>
              </div>
      

              <div class="gender-details">
                <input type="radio" name="gender" id="dot-1" value="Male">
                <input type="radio" name="gender" id="dot-2" value="Female">
                <span class="gender-title">Gender</span>
                <div class="category">
                  <label for="dot-1">
                  <span class="dot one"></span>
                  <span class="gender">Male&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </label>
                <label for="dot-2">
                  <span class="dot two"></span>
                  <span class="gender">Female</span>
                </label>
                </div>
              </div>
              
            </div>
            <div class="button">
              <input type="submit" name="submit" value="Register">
            </div>
          </form>
        </div>
      </div>


<?php
  }
?>
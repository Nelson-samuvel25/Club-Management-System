<?php
if(isset($_POST['submit'])){
    $optionName = $_POST['optionName'];
    $optionType = $_POST['optionType'];
    $query = "INSERT INTO options(optionName, optionType) VALUES ('$optionName', '$optionType')";
    query($query);

}
?>

<div class="container mt-4">

    <div class="card w-50 bg-dark text-light mx-auto">
        <div class="card-body">
            <form method="POST" action="./optionForm" enctype="multipart/form-data">
                <h2 class="text-center">Option Updation</h2>

                <div class="input-box">
                    <span class="details">Option Type</span>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                        name="optionType">
                        <option selected hidden>Option Type</option>
                        <option value="Department">Department</option>
                        <option value="Branch">Branch</option>
                        <option value="Year">Year</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                </div>
                <div class="form-group mt-4">
                    <label for="exampleInputPassword1" class="fw-bold">Option Name</label>
                    <input type="text" name="optionName" class="form-control mt-3" id="exampleInputPassword1"
                        placeholder="title">
                </div>
                <button type="submit" value="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>

</div>
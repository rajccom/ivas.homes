<?php
//  $conn = new mysqli("localhost:3306", "root", "", "ivas");
 $conn = new mysqli("localhost", "ivas_homes", "a4qhe6aaw6of", "ivas_homes");
//$conn = new mysqli("localhost", "ivas_homes_uat", "6rl9d3zxwuqb", "ivas_homes_uat");
$cities_id = $_POST["cities_id"];
$result = mysqli_query($conn,"SELECT * FROM sanitaryware_address_details where sanitaryware_city_id = $cities_id");
if (!$result) {
  die('<div class="col-sm-12"><p class="alert alert-danger">Please Select City</p></div>');
}
// $result=mysqli_query($con, $sql);
if(mysqli_num_rows($result)){
   while($row=mysqli_fetch_assoc($result)){
    echo '
    <div class="col-sm-4 dealer-col-address mb-4">
    <div class="card shadow-sm py-4 px-3">
      <div class="card-body">
      <h4 class="card-title">'.$row["title"].'</h4>
        <p class="dealer-address">'.$row["address"].'</p>
        <div class="get-direction">
        <a href="'.$row["direction"].'" target="blank" class=""><i class="fa fa-map-marker" aria-hidden="true"></i> Get directions</a></div>
      </div>
    </div>
    </div>
            '
            ;
}
}
else
     {
         echo '<div class="col-sm-12"><p class="alert alert-danger">Record Not Found</p></div>';
     }
?>
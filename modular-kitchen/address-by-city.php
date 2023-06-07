<?php
//  $conn = new mysqli("localhost:3306", "root", "", "ivas");
 $conn = new mysqli("localhost", "ivas_homes", "a4qhe6aaw6of", "ivas_homes");
// $conn = new mysqli("localhost", "ivas_homes_uat", "6rl9d3zxwuqb", "ivas_homes_uat");
$cities_id = isset($_POST["cities_id"]) ? addslashes($_POST["cities_id"]) : "";
$result = mysqli_query($conn,"SELECT * FROM modular_kitchen_address_details where modular_kitchen_city_id = $cities_id");
if (!$result) {
  die('<div class="col-sm-12"><p class="alert alert-danger">Please Select City</p></div>');
}

$num_rows = mysqli_num_rows($result);
$items_per_row = 3;
$rows_per_slide = 1;
$slides_per_page = ceil($num_rows / ($items_per_row * $rows_per_slide));

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $items_per_row * $rows_per_slide;
$end = $start + ($items_per_row * $rows_per_slide) - 1;

if ($num_rows > 0) {
  $count = 0;
  $slide_count = 0;
  while ($row = mysqli_fetch_assoc($result)) {
    if ($count == $start) {
      echo '<div class="carousel slide" id="myCarousel" data-interval="false">';
      echo '<div class="carousel-inner">';      
      echo '<div class="item active">';
      echo '<div class="row">';
    }
    
    echo '
    <div class="col-sm-4 dealer-col-address mb-4">
      <div class="card shadow-sm py-4 px-3">
        <div class="card-body">
          <h4 class="card-title">'.$row["title"].'</h4>
          <p class="dealer-address">'.$row["address"].'</p>
          <div class="get-direction">
            <a href="'.$row["direction"].'" target="_blank">
              <i class="fa fa-map-marker" aria-hidden="true"></i> Get directions
            </a>
          </div>
        </div>
      </div>
    </div>
    ';

    $count++;

    if ($count == $end || $count == $num_rows) {
      echo '</div>'; // Close row
      echo '</div>'; // Close item
      echo '</div>'; // Close carousel-inner

      $slide_count++;
      if ($slide_count < $slides_per_page) {
        echo '<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
        echo '<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>';
        echo '</div>'; // Close carousel
        echo '</div>'; // Close item

        if ($count != $num_rows) {
          echo '<div class="item">';
          echo '<div class="row">';
        }
      }
    }
  }
} else {
  echo '<div class="col-sm-12"><p class="alert alert-danger">Record Not Found</p></div>';
}
?>

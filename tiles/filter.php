<div class="clear-filter"> 
  <a href="tiles/products.php"><i class="fa fa-times" aria-hidden="true"></i> Clear Filter</a>
  <!-- <button onClick="window.location.href=window.location.href">
    <i class="fa fa-times" aria-hidden="true"></i> Clear Filter
  </button> -->
</div>

<div class="accordion">
<div class="accordion-item">
    <h2 class="accordion-header" id="cat-filter">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cat-filter-j" aria-expanded="false" aria-controls="cat-filter">
        Category
      </button>
    </h2>

    <?php
    $category = isset($_GET['category']) ? str_replace('-', ' ', $_GET['category']) : '';
    $colour = isset($_GET['colour']) ? str_replace('-',' ',$_GET['colour']) : '';
    $selected_finish = isset($_GET['finish']) ? str_replace('-',' ',$_GET['finish']) : '';
    $style = isset($_GET['style']) ? str_replace('-',' ',$_GET['style']) : '';
    $size = isset($_GET['size']) ? str_replace('-',' ',$_GET['size']) : '';
    $application = isset($_GET['app']) ? str_replace('-',' ',$_GET['app']) : '';
    $application_areas = isset($_GET['app_area']) ? str_replace('-',' ',$_GET['app_area']) : '';
    ?>
    <div id="cat-filter-j" class="accordion-collapse " aria-labelledby="cat-filter" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php
        $query = "SELECT DISTINCT(category) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row) {
          if ($row['category'] != '') {
            $checked = '';
            if (in_array($row['category'], explode(',', $category))) {
              $checked = 'checked="checked"';
            }
        ?>
            <div class="product-filter-y checkbox">
              <label>
                <input type="checkbox" class="common_selector category" value="<?php echo $row['category']; ?>" <?php echo $checked; ?> > <?php echo $row['category']; ?>
              </label>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>

  <!-- <div class="accordion-item">
  <h2 class="accordion-header" id="colour">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#colour-s" aria-expanded="false" aria-controls="colour">
      Colour
    </button>
  </h2>
  <div id="colour-s" class="accordion-collapse collapse" aria-labelledby="colour" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php
      $query = "SELECT DISTINCT(colour) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC";
      $statement = $connect->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      foreach ($result as $row) {
        if ($row['colour'] != '') {
          $checked = '';
          if ($colour == $row['colour']) {
            $checked = 'checked="checked"';
          }
      ?>
          <div class="product-filter-y checkbox">
            <label>
              <input type="checkbox" class="common_selector colour" value="<?php echo $row['colour']; ?>" <?php echo $checked; ?>><?php echo $row['colour']; ?>
            </label>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div> -->

<div class="accordion-item">
  <h2 class="accordion-header" id="finish">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finish-a" aria-expanded="false" aria-controls="finish">
      Finish
    </button>
  </h2>
  <div id="finish-a" class="accordion-collapse collapse" aria-labelledby="finish" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php
      $query = "SELECT DISTINCT finish, finish_one FROM tiles WHERE product_status = '1' ORDER BY product_id ASC";
      $statement = $connect->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();

      $finishes = [];

      // Collect all finish values in a single array
      foreach ($result as $row) {
        if ($row['finish'] != '') {
          $finishes = array_merge($finishes, explode(',', $row['finish']));
        }
        if ($row['finish_one'] != '') {
          $finishes = array_merge($finishes, explode(',', $row['finish_one']));
        }
      }

      // Remove duplicate values
      $finishes = array_unique($finishes);

      // Display checkboxes for finishes
      foreach ($finishes as $finish) {
        $finish = trim($finish); // Trim whitespace
        if ($finish !== '') {
          $checked = '';
          if (in_array($finish, explode(',', $selected_finish))) {
            $checked = 'checked="checked"';
          }
      ?>
          <div class="product-filter-y checkbox">
            <label>
              <input type="checkbox" class="common_selector finish" value="<?php echo $finish; ?>" <?php echo $checked; ?>>
              <?php echo $finish; ?>
            </label>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div>


<div class="accordion-item">
  <h2 class="accordion-header" id="style">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#style-p" aria-expanded="false" aria-controls="style">
    Style
    </button>
  </h2>
  <div id="style-p" class="accordion-collapse collapse" aria-labelledby="style" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php

                    $query = "
                    SELECT DISTINCT(style) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['style']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector style" value="<?php echo $row['style']; ?>" <?php if($style == $row['style']) { echo 'checked="checked"'; } ?> > <?php echo $row['style']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
    </div>
  </div>
</div>

<div class="accordion-item">
  <h2 class="accordion-header" id="size">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#size-b" aria-expanded="false" aria-controls="size-d">
    Size
    </button>
  </h2>
  <div id="size-b" class="accordion-collapse collapse" aria-labelledby="size" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php

                    $query = "
                    SELECT DISTINCT(size) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['size']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector size" value="<?php echo $row['size']; ?>" <?php if($size == $row['size']) { echo 'checked="checked"'; } ?> > <?php echo $row['size']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
    </div>
  </div>
</div>

<div class="accordion-item">
  <h2 class="accordion-header" id="size">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#size-d" aria-expanded="false" aria-controls="size-d">
    Application
    </button>
  </h2>
  <div id="size-d" class="accordion-collapse collapse" aria-labelledby="size" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php

                    $query = "
                    SELECT DISTINCT(application) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application" value="<?php echo $row['application']; ?>" <?php if($application == $row['application']) { echo 'checked="checked"'; } ?> > <?php echo $row['application']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?>
    <?php

                    $query1 = "
                    SELECT DISTINCT(application_one) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query1);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application_one']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application_one" value="<?php echo $row['application_one']; ?>" <?php if($application == $row['application_one']) { echo 'checked="checked"'; } ?> > <?php echo $row['application_one']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?>                
    </div>
  </div>
</div>

<div class="accordion-item">
  <h2 class="accordion-header" id="application">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#application-h" aria-expanded="false" aria-controls="application">
    Spaces
    </button>
  </h2>
  <div id="application-h" class="accordion-collapse collapse" aria-labelledby="application" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php

                    $query = "
                    SELECT DISTINCT(application_areas) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application_areas']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application_areas" value="<?php echo $row['application_areas']; ?>" <?php if($application_areas == $row['application_areas']) { echo 'checked="checked"'; } ?> > <?php echo $row['application_areas']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?>
    <?php

                    $query1 = "
                    SELECT DISTINCT(application_areas_one) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query1);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application_areas_one']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application_areas_one" value="<?php echo $row['application_areas_one']; ?>" <?php if($application_areas == $row['application_areas_one']) { echo 'checked="checked"'; } ?> > <?php echo $row['application_areas_one']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?>   
                    
    <?php

                    $query2 = "
                    SELECT DISTINCT(application_areas_two) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query2);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application_areas_two']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application_areas_two" value="<?php echo $row['application_areas_two']; ?>" <?php if($application_areas == $row['application_areas_two']) { echo 'checked="checked"'; } ?> > <?php echo $row['application_areas_two']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?> 
        <?php

                    $query3 = "
                    SELECT DISTINCT(application_areas_three) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query3);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application_areas_three']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application_areas_three" value="<?php echo $row['application_areas_three']; ?>" <?php if($application_areas == $row['application_areas_three']) { echo 'checked="checked"'; } ?> > <?php echo $row['application_areas_three']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?> 
        <?php

                    $query4 = "
                    SELECT DISTINCT(application_areas_four) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query4);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application_areas_four']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application_areas_four" value="<?php echo $row['application_areas_four']; ?>" <?php if($application_areas == $row['application_areas_four']) { echo 'checked="checked"'; } ?> > <?php echo $row['application_areas_four']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?>
        <?php

                    $query5 = "
                    SELECT DISTINCT(application_areas_five) FROM tiles WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query5);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['application_areas_five']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector application_areas_five" value="<?php echo $row['application_areas_five']; ?>" <?php if($application_areas == $row['application_areas_five']) { echo 'checked="checked"'; } ?> > <?php echo $row['application_areas_five']; ?></label>
                    </div>
                    <?php    
                    }
                  }

                    ?>
    </div>
  </div>
</div>



</div>

<!-- <script>
  $(document).ready(function() {
    // Handle checkbox change events
    $('.common_selector').on('change', function() {
      filterProducts();
    });

    // Handle clear filter button click
    $('.clear-filter button').on('click', function() {
      // Uncheck all checkboxes
      $('.common_selector').prop('checked', false);
      filterProducts();
    });

    // Filter products based on selected checkboxes
    function filterProducts() {
      var category = [];

      // Get selected checkbox values
      $('.common_selector.category:checked').each(function() {
        category.push($(this).val());
      });

      // Construct the URL parameters
      var params = {};
      if (category.length > 0) {
        params.category = category.join(',');
      }

      // Construct the new URL with the parameters
      var url = window.location.href.split('?')[0]; // Get the base URL without parameters
      var newUrl = url;
      if (Object.keys(params).length > 0) {
        newUrl += '?' + $.param(params); // Add the parameters to the URL
      }

      // Redirect to the new URL
      window.location.href = newUrl;
    }
  });
</script> -->

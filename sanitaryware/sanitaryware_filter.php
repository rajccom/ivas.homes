
<div class="clear-filter"> 
  <a href="sanitaryware/products.php"><i class="fa fa-times" aria-hidden="true"></i> Clear Filter</a>
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
  $category = isset($_GET['category']) ? str_replace('-',' ',$_GET['category']) : '';
  $colour = isset($_GET['colour']) ? str_replace('-',' ',$_GET['colour']) : '';
  $selected_type = isset($_GET['type']) ? str_replace('-',' ',$_GET['type']) : '';
  $trap = isset($_GET['trap']) ? str_replace('-',' ',$_GET['trap']) : '';
  $selected_finish = isset($_GET['finish']) ? str_replace('-',' ',$_GET['finish']) : '';
  $selected_collection = isset($_GET['collection']) ? str_replace('-',' ',$_GET['collection']) : '';
  // $size = isset($_GET['size']) ? str_replace('-',' ',$_GET['size']) : '';
  // $application = isset($_GET['app']) ? str_replace('-',' ',$_GET['app']) : '';
  // $application_areas = isset($_GET['app_area']) ? str_replace('-',' ',$_GET['app_area']) : '';
  ?>
<div id="cat-filter-j" class="accordion-collapse collapse" aria-labelledby="cat-filter" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php
      $query = "SELECT DISTINCT(category) FROM sanitaryware WHERE product_status = '1' ORDER BY product_id ASC";
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
              <input type="checkbox" class="common_selector category" value="<?php echo $row['category']; ?>" <?php echo $checked; ?>>
              <?php echo $row['category']; ?>
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
  <h2 class="accordion-header" id="colour">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#colour-s" aria-expanded="false" aria-controls="colour">
    Colour
    </button>
  </h2>
  <div id="colour-s" class="accordion-collapse collapse" aria-labelledby="colour" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php

                    $query = "
                    SELECT DISTINCT(colour) FROM sanitaryware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['colour']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector colour" value="<?php echo $row['colour']; ?>" <?php if($colour == $row['colour']) { echo 'checked="checked"'; } ?> > <?php echo $row['colour']; ?></label>
                    </div>
                    <?php
                      }
                    }

                    ?>
    <?php

                    $query1 = "
                    SELECT DISTINCT(colour_one) FROM sanitaryware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query1);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['colour_one']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector colour_one" value="<?php echo $row['colour_one']; ?>" <?php if($colour == $row['colour_one']) { echo 'checked="checked"'; } ?> > <?php echo $row['colour_one']; ?></label>
                    </div>
                    <?php 
                      }   
                    }

                    ?>   
                    
    <?php

                    $query2 = "
                    SELECT DISTINCT(colour_two) FROM sanitaryware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query2);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['colour_two']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector colour_two" value="<?php echo $row['colour_two']; ?>" <?php if($colour == $row['colour_two']) { echo 'checked="checked"'; } ?> > <?php echo $row['colour_two']; ?></label>
                    </div>
                    <?php 
                      }   
                    }

                    ?> 
        <?php

                    $query3 = "
                    SELECT DISTINCT(colour_three) FROM sanitaryware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query3);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['colour_three']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector colour_three" value="<?php echo $row['colour_three']; ?>" <?php if($colour == $row['colour_three']) { echo 'checked="checked"'; } ?> > <?php echo $row['colour_three']; ?></label>
                    </div>
                    <?php  
                      }  
                    }

                    ?> 
        <?php

                    $query4 = "
                    SELECT DISTINCT(colour_four) FROM sanitaryware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query4);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['colour_four']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector colour_four" value="<?php echo $row['colour_four']; ?>" <?php if($colour == $row['colour_four']) { echo 'checked="checked"'; } ?> > <?php echo $row['colour_four']; ?></label>
                    </div>
                    <?php 
                      }   
                    }

                    ?>
        <?php

                    $query5 = "
                    SELECT DISTINCT(colour_five) FROM sanitaryware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query5);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['colour_five']!=''){
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector colour_five" value="<?php echo $row['colour_five']; ?>" <?php if($colour == $row['colour_five']) { echo 'checked="checked"'; } ?> > <?php echo $row['colour_five']; ?></label>
                    </div>
                    <?php  
                      }  
                    }

                    ?>
    </div>
  </div>
</div>

<div class="accordion-item">
  <h2 class="accordion-header" id="type">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#type-t" aria-expanded="false" aria-controls="type">
      Type
    </button>
  </h2>
  <div id="type-t" class="accordion-collapse collapse" aria-labelledby="type" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php
      $query = "
        SELECT DISTINCT type, type_one
        FROM sanitaryware
        WHERE product_status = '1'
        ORDER BY product_id ASC
      ";
      $statement = $connect->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();

      // Create an array to store all types
      $types = [];

      // Collect all types from both fields
      foreach ($result as $row) {
        $type = $row['type'];
        $typeOne = $row['type_one'];

        if (!empty($type)) {
          $types[] = $type;
        }

        if (!empty($typeOne)) {
          $types[] = $typeOne;
        }
      }

      // Remove empty and duplicate values
      $types = array_filter(array_unique($types));

      // Display checkboxes for types
      foreach ($types as $type) {
        $checked = (in_array($type, explode(',', $selected_type))) ? 'checked="checked"' : '';
        ?>
        <div class="product-filter-y checkbox">
          <label>
            <input type="checkbox" class="common_selector type" value="<?php echo $type; ?>" <?php echo $checked; ?>>
            <?php echo $type; ?>
          </label>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>





<div class="accordion-item">
  <h2 class="accordion-header" id="finish">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finish-f" aria-expanded="false" aria-controls="finish">
      Finish
    </button>
  </h2>
  <div id="finish-f" class="accordion-collapse collapse" aria-labelledby="finish" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php
      $query = "
        SELECT DISTINCT finish
        FROM sanitaryware
        WHERE product_status = '1'
        ORDER BY product_id ASC
      ";
      $statement = $connect->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();

      // Display checkboxes for finishes
      foreach ($result as $row) {
        $finish = $row['finish'];
        if (!empty($finish)) {
          $checked = ($finish == $selected_finish) ? 'checked="checked"' : '';
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
  <h2 class="accordion-header" id="collection">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collection-c" aria-expanded="false" aria-controls="collection">
      Collection
    </button>
  </h2>
  <div id="collection-c" class="accordion-collapse collapse" aria-labelledby="collection" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php
      $query = "
        SELECT DISTINCT collection
        FROM sanitaryware
        WHERE product_status = '1'
        ORDER BY product_id ASC
      ";
      $statement = $connect->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();

      // Display checkboxes for collections
      foreach ($result as $row) {
        $collection = $row['collection'];
        if (!empty($collection)) {
          $checked = ($collection == $selected_collection) ? 'checked="checked"' : '';
          ?>
          <div class="product-filter-y checkbox">
            <label>
              <input type="checkbox" class="common_selector collection" value="<?php echo $collection; ?>" <?php echo $checked; ?>>
              <?php echo $collection; ?>
            </label>
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
    // Function to update the URL and perform filtering
    function filterProducts() {
      var category = [];
      var colour = [];
      var type = [];
      var trapType = [];
      var finish = [];
      var collection = [];

      // Get selected checkbox values
      $('.common_selector.category:checked').each(function() {
        category.push($(this).val());
      });
      $('.common_selector.colour:checked').each(function() {
        colour.push($(this).val());
      });
      $('.common_selector.type:checked').each(function() {
        type.push($(this).val());
      });
      $('.common_selector.trap_type:checked').each(function() {
        trapType.push($(this).val());
      });
      $('.common_selector.finish:checked').each(function() {
        finish.push($(this).val());
      });
      $('.common_selector.collection:checked').each(function() {
        collection.push($(this).val());
      });
// Build the URL parameters
      var params = [];
      if (category.length > 0) {
        params.push('category=' + category.join('-'));
      }
      if (colour.length > 0) {
        params.push('colour=' + colour.join('-'));
      }
      if (type.length > 0) {
        params.push('type=' + type.join('-'));
      }
      if (trapType.length > 0) {
        params.push('trap=' + trapType.join('-'));
      }
      if (finish.length > 0) {
        params.push('finish=' + finish.join('-'));
      }
      if (collection.length > 0) {
        params.push('collection=' + collection.join('-'));
      }

      // Build the new URL with updated parameters
      var url = window.location.href.split('?')[0];
      if (params.length > 0) {
        url += '?' + params.join('&');
      }

      // Update the URL
      history.pushState(null, null, url);

      // Perform filtering
      filter_data();
    }

    // Function to perform AJAX filtering
    function filter_data() {
      var category = getFilterValues('category');
      var colour = getFilterValues('colour');
      var type = getFilterValues('type');
      var trap = getFilterValues('trap');
      var finish = getFilterValues('finish');
      var collection = getFilterValues('collection');

      // Send AJAX request to filter the products
      $.ajax({
        url: 'fetch_data.php',
        method: 'POST',
        data: {
          category: category,
          colour: colour,
          type: type,
          trap: trap,
          finish: finish,
          collection: collection
        },
        success: function(data) {
          // Update the product list
          $('#product-filter').html(data);
        }
      });
    }

    // Helper function to get selected checkbox values
    function getFilterValues(className) {
      var values = [];
      $('.' + className + ':checked').each(function() {
        values.push($(this).val());
      });
      return values;
    }

    // Event listener for category filter checkboxes
    $(document).on('change', '.common_selector.category', function() {
      filter_data();
    });

    // Event listener for other filter checkboxes
    $(document).on('change', '.common_selector', function() {
      filter_data();
    });

    // Event listener for clear filter button
    $(document).on('click', '.clear-filter button', function() {
      $('input[type=checkbox]').prop('checked', false);
      filter_data();
    });
});

</script> -->


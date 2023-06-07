
<div class="clear-filter"> 
  <a href="designer-hardware/products.php"><i class="fa fa-times" aria-hidden="true"></i> Clear Filter</a>
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
  $colour = isset($_GET['colour']) ? str_replace('-', ' ', $_GET['colour']) : '';
  $type = isset($_GET['type']) ? str_replace('-', ' ', $_GET['type']) : '';
  $cock_type = isset($_GET['cock_type']) ? str_replace('-', ' ', $_GET['cock_type']) : '';
  $finish = isset($_GET['finish']) ? str_replace('-', ' ', $_GET['finish']) : '';
  $material = isset($_GET['base_material']) ? str_replace('-', ' ', $_GET['base_material']) : '';
  ?>
  <div id="cat-filter-j" class="accordion-collapse collapse" aria-labelledby="cat-filter" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php
      $query = "SELECT DISTINCT(categroy) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC";
      $statement = $connect->prepare($query);
      $statement->execute();
      $result = $statement->fetchAll();
      foreach ($result as $row) {
        if ($row['categroy'] != '') {
          $checked = '';
          if (in_array($row['categroy'], explode(',', $category))) {
            $checked = 'checked="checked"';
          }
          ?>
          <div class="product-filter-y checkbox">
            <label><input type="checkbox" class="common_selector categroy" value="<?php echo $row['categroy']; ?>" <?php echo $checked; ?>> <?php echo $row['categroy']; ?></label>
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
    Finish
    </button>
  </h2>
  <div id="size-b" class="accordion-collapse collapse" aria-labelledby="size" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php

                    $query = "
                    SELECT DISTINCT(finish) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish" value="<?php echo $row['finish']; ?>" <?php if($finish == $row['finish']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
    <?php

                    $query1 = "
                    SELECT DISTINCT(finish_one) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query1);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_one']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_one" value="<?php echo $row['finish_one']; ?>" <?php if($finish == $row['finish_one']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_one']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
        <?php

                    $query2 = "
                    SELECT DISTINCT(finish_two) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query2);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_two']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_two" value="<?php echo $row['finish_two']; ?>" <?php if($finish == $row['finish_two']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_two']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
            <?php

                    $query3 = "
                    SELECT DISTINCT(finish_three) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query3);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_three']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_three" value="<?php echo $row['finish_three']; ?>" <?php if($finish == $row['finish_three']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_three']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
              <?php
                    $query4 = "
                    SELECT DISTINCT(finish_four) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query4);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_four']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_four" value="<?php echo $row['finish_four']; ?>" <?php if($finish == $row['finish_four']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_four']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
             <?php
                    $query5 = "
                    SELECT DISTINCT(finish_five) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query5);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_five']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_five" value="<?php echo $row['finish_five']; ?>" <?php if($finish == $row['finish_five']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_five']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>

<?php
                    $query6 = "
                    SELECT DISTINCT(finish_six) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query6);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_six']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_six" value="<?php echo $row['finish_six']; ?>" <?php if($finish == $row['finish_six']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_six']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>

<?php
                    $query7 = "
                    SELECT DISTINCT(finish_seven) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query7);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_seven']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_seven" value="<?php echo $row['finish_seven']; ?>" <?php if($finish == $row['finish_seven']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_seven']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
      <?php
                    $query8 = "
                    SELECT DISTINCT(finish_eight) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query8);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_eight']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_eight" value="<?php echo $row['finish_eight']; ?>" <?php if($finish == $row['finish_eight']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_eight']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
      <?php
                    $query9 = "
                    SELECT DISTINCT(finish_nine) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query9);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_nine']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_nine" value="<?php echo $row['finish_nine']; ?>" <?php if($finish == $row['finish_nine']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_nine']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
      <?php
                    $query10 = "
                    SELECT DISTINCT(finish_ten) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query10);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_ten']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_ten" value="<?php echo $row['finish_ten']; ?>" <?php if($finish == $row['finish_ten']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_ten']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
      <?php
                    $query11 = "
                    SELECT DISTINCT(finish_eleven) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query11);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_eleven']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_eleven" value="<?php echo $row['finish_eleven']; ?>" <?php if($finish == $row['finish_eleven']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_eleven']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
       <?php
                    $query12 = "
                    SELECT DISTINCT(finish_twelve) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query12);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_twelve']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_twelve" value="<?php echo $row['finish_twelve']; ?>" <?php if($finish == $row['finish_twelve']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_twelve']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
        <?php
                    $query13 = "
                    SELECT DISTINCT(finish_thirteen) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query13);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_thirteen']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_thirteen" value="<?php echo $row['finish_thirteen']; ?>" <?php if($finish == $row['finish_thirteen']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_thirteen']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
      <?php
                    $query14 = "
                    SELECT DISTINCT(finish_fourteen) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query14);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_fourteen']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_fourteen" value="<?php echo $row['finish_fourteen']; ?>" <?php if($finish == $row['finish_fourteen']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_fourteen']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
     <?php
                    $query15 = "
                    SELECT DISTINCT(finish_fifteen) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query15);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_fifteen']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_fifteen" value="<?php echo $row['finish_fifteen']; ?>" <?php if($finish == $row['finish_fifteen']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_fifteen']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>

<?php
                    $query16 = "
                    SELECT DISTINCT(finish_sixteen) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query16);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_sixteen']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_sixteen" value="<?php echo $row['finish_sixteen']; ?>" <?php if($finish == $row['finish_sixteen']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_sixteen']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>

<?php
                    $query17 = "
                    SELECT DISTINCT(finish_seventeen) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query17);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_seventeen']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_seventeen" value="<?php echo $row['finish_seventeen']; ?>" <?php if($finish == $row['finish_seventeen']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_seventeen']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>

<?php
                    $query18 = "
                    SELECT DISTINCT(finish_eighteen) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query18);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['finish_eighteen']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish_eighteen" value="<?php echo $row['finish_eighteen']; ?>" <?php if($finish == $row['finish_eighteen']) { echo 'checked="checked"'; } ?> > <?php echo $row['finish_eighteen']; ?></label>
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
    Base Material
    </button>
  </h2>
  <div id="size-d" class="accordion-collapse collapse" aria-labelledby="size" data-bs-parent="#accordionExample">
    <div class="accordion-body">

    <?php
                    $query = "
                    SELECT DISTINCT(base_material) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['base_material']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector base_material" value="<?php echo $row['base_material']; ?>" <?php if($material == $row['base_material']) { echo 'checked="checked"'; } ?> > <?php echo $row['base_material']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>

<?php
                    $query1 = "
                    SELECT DISTINCT(base_material_one) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query1);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['base_material_one']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector base_material_one" value="<?php echo $row['base_material_one']; ?>" <?php if($material == $row['base_material_one']) { echo 'checked="checked"'; } ?> > <?php echo $row['base_material_one']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>      
                    
                    <?php
                    $query2 = "
                    SELECT DISTINCT(base_material_two) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    ";
                    $statement = $connect->prepare($query2);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                      if($row['base_material_two']!='')
                      {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector base_material_two" value="<?php echo $row['base_material_two']; ?>" <?php if($material == $row['base_material_two']) { echo 'checked="checked"'; } ?> > <?php echo $row['base_material_two']; ?></label>
                    </div>
                    <?php
                    }
                  }

                    ?>
    </div>
  </div>
</div> 

<!-- <div class="accordion-item">
  <h2 class="accordion-header" id="application">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#application-h" aria-expanded="false" aria-controls="application">
    Collection
    </button>
  </h2>
  <div id="application-h" class="accordion-collapse collapse" aria-labelledby="application" data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <?php

                    // $query = "
                    // SELECT DISTINCT(collection) FROM designer_hardware WHERE product_status = '1' ORDER BY product_id ASC
                    // ";
                    // $statement = $connect->prepare($query);
                    // $statement->execute();
                    // $result = $statement->fetchAll();
                    // foreach($result as $row)
                    // {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector collection" value="<?php //echo $row['collection']; ?>" > <?php //echo $row['collection']; ?></label>
                    </div>
                    <?php    
                    //}

                    ?>
    
    </div>
  </div>
</div> -->

<!--<div class="accordion-item">
  <h2 class="accordion-header" id="finish">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finish-d" aria-expanded="false" aria-controls="finish-d">
    Finish
    </button>
  </h2>
  <div id="finish-d" class="accordion-collapse collapse" aria-labelledby="finish" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php
                    // $query = "
                    // SELECT DISTINCT(name) FROM finish ORDER BY id ASC
                    // ";
                    // $statement = $connect->prepare($query);
                    // $statement->execute();
                    // $result = $statement->fetchAll();
                    // foreach($result as $row)
                    // {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector finish" value="<?php// echo $row['id']; ?>"  > <?php //echo $row['name']; ?></label>
                    </div>
                    <?php
                    // }
                    ?>	
    </div>
  </div>
</div>


 <div class="accordion-item">
  <h2 class="accordion-header" id="Concept">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Concept-d" aria-expanded="false" aria-controls="Concept-d">
    Concept
    </button>
  </h2>
  <div id="Concept-d" class="accordion-collapse collapse" aria-labelledby="Concept" data-bs-parent="#accordionExample">
    <div class="accordion-body">
    <?php
                    // $query = "
                    // SELECT DISTINCT(concept) FROM product WHERE product_status = '1' ORDER BY concept DESC
                    // ";
                    // $statement = $connect->prepare($query);
                    // $statement->execute();
                    // $result = $statement->fetchAll();
                    // foreach($result as $row)
                    // {
                    ?>
                    <div class="product-filter-y checkbox">
                        <label><input type="checkbox" class="common_selector concept" value="<?php //echo $row['concept']; ?>"  > <?php //echo $row['concept']; ?></label>
                    </div>
                    <?php
                   // }
                    ?>		
    </div>
  </div>
</div> -->

</div>
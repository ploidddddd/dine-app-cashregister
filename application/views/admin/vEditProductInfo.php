<div class="pusher">
    <div class='ui basic segment'>
        <h1 class="ui brown dividing header">
            <i class="food icon"></i>
            <div class="content">
              PRODUCTS
              <div class="sub header">Shows the list of products under a category</div>
            </div>
        </h1> <!-- header -->
        <div class='ui breadcrumb'>
            <a class='section' href='<?php echo site_url()?>/CUser/viewAdminDashboard'>HOME</a>
            <i class='right arrow icon divider'></i>
            <a class='section' href='<?php echo site_url()?>/CProduct/viewCategoryList'>CATEGORIES</a>
            <i class='right arrow icon divider'></i>
            <a class='section' href='<?php echo site_url()?>/CProduct/viewProductsInCategory'>PRODUCT LIST</a>
            <i class='right arrow icon divider'></i>
            <a class='section'  href='<?php echo site_url()?>/CProduct/viewProductInfo/1'>PRODUCT INFORMATION</a>
            <i class='right arrow icon divider'></i>
            <div class='active section'>EDIT PRODUCT INFORMATION</div>
        </div> <!-- breadcrumb -->
    </div> <!-- segment -->
    <h3 class="ui horizontal header divider">
        <i class="food icon"></i>
        Product Information
    </h3>
    <div class='ui attached segment'> 
        <div class='ui stackable padded grid'> 
            <?php if (isset($product)) { ?>
            <?php foreach($product as $prod) {} ?>  
            <div class='row'>
                <div class='column'>
                    <form class='ui form'>
                        <div class='nine wide field'>
                            <label>UPLOAD IMAGE</label>
                            <input type="file" name="pic" accept="image/*" value='<?php echo $prod->product_image; ?>'>
                        </div>

                        <div class='nine wide required field'><label>FOOD NAME</label><input type='text' placeholder='Enter first name' value='<?php echo $prod->product_name;  ?>'></div>

                        <div class='nine wide  required field'><label>FOOD DESCRIPTION</label><textarea placeholder='Enter food description'><?php echo $prod->product_description;  ?></textarea></div>

                        <div class='nine wide  required field'><label>FOOD PRICE</label><input type='number' placeholder='Enter food price' value='<?php echo $prod->product_price;  ?>'></div>

                        <label>CATEGORY</label><br>
                        <select class="ui dropdown">
                          <option value="<?php echo $prod->product_description;  ?>" class='selected'><?php echo $prod->product_category;  ?></option>
                          <option value="1">Beverage</option>
                          <option value="2">Meals</option>
                        </select> <!-- availability dropdown -->

                        <div class='ui hidden divider'></div>

                        <label>AVAILABILITY</label><br>
                        <select class="ui dropdown">
                          <option value="<?php echo $prod->product_availability;  ?>" class='selected'><?php echo $prod->product_availability;  ?></option>
                          <option value="">Choose availability</option>
                          <option value="1">Available</option>
                          <option value="0">Not Available</option>
                        </select> <!-- availability dropdown -->

                        <div class='ui hidden divider'></div>
                        <div class='ui hidden divider'></div>

                        <a href="<?php echo site_url()?>/CProduct/viewProductInfo/1?>"><div class='ui submit gray button'>Cancel</div></a>

                        <div class='ui submit brown button'>Edit</div>

                        <div class='ui hidden divider'></div>

                    </form> <!-- form -->
                </div>
            </div>

            <?php } ?> 
        
        </div> <!-- ui grid -->
    </div> <!-- segment -->
  </div> <!-- pusher -->
</div> <!-- bottom attached segment -->



                    
</body>
</html>

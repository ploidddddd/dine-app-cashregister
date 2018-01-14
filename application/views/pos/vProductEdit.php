  <div class="row"></div>
  <div class="row">
    <div class="column"></div>
    <div class="six wide column">
      <h1 class="ui grey header">
        <i class="food icon"></i>
        <div class="content">
          <?php echo $prod_cat; ?>
        </div>  
      </h1>

      <a href="<?php echo site_url().'/COrderItem/viewEdit/'.$page.'/'.$eid.'/'.$qr; ?>">
        <h4 style="color: gray;"><i class="left arrow grey icon"></i>BACK TO CATEGORIES</h4>
      </a>

      <div class="ui hidden divider"></div>


      <div class='ui grid'>
        <?php if(isset($products)) { ?>
              <?php foreach ($products as $prod){ ?>
          <div class="eight wide column">
          <form method="POST" action="<?php echo site_url().'/CReceiptItem/editItems/'.$page.'/'. $prod->product_id.'/'.$eid.'/'.$qr;?>">
            <div class='ui segment'>
                <img class='ui centered small image' src= "<?php echo base_url($prod->product_image)?>">
                <span style='font-family: "Roboto"; font-size:1.2em; color: black;'>
                  <?php echo $prod->product_name; ?>
                </span>
                <div class="ui hidden divider"></div>
                <div class="ui two column grid">
                  <div class="column">
                    P<span id="price" style="font-size: 1.3em;"><?php echo $prod->product_price; ?>.00</span>
                  </div>
                  <div class="center aligned middle aligned teal column">
                    <button class="ui large labeled button" type="submit">
                       <input type="hidden" value="<?php echo $prod->product_id ?> " id="pid" name="pid" class="pid">
                        <i class="white plus icon"></i><span style="color: white;">Add</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            </div>
          <?php } ?>
        <?php }else{  echo "<i class='circle warning icon error'></i><span> No items to display.</span>" ;} ?> 

      </div>
      <div class="ui hidden divider"></div>
      <div class="ui hidden divider"></div>
      <div class="ui hidden divider"></div>
    </div>
    <div class="two wide column"></div>
    <?php $this->view('pos/vEditComponent'); ?>
    
</body>
</html>


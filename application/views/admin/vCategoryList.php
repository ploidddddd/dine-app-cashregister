<div class="pusher">
    <div class='ui basic segment'>
        <h1 class="ui brown dividing header">
            <i class="food icon"></i>
            <div class="content">
              PRODUCTS
              <div class="sub header">Shows the list of food by category</div>
            </div>
        </h1> <!-- header -->
        <div class='ui breadcrumb'>
            <a class='section' href='<?php echo site_url()?>/CUser/viewAdminDashboard'>HOME</a>
            <i class='right arrow icon divider'></i>
            <div class='active section'>CATEGORIES</div>
        </div> <!-- breadcrumb -->
    </div> <!-- segment -->
    <h3 class="ui horizontal header divider">
        Categories
    </h3>
    <div class='ui segment'> 
        <div class='ui stackable padded grid'>
            <div class='row'>
                <a href='<?php echo site_url()?>/CProduct/addNewProduct'><button class='ui circular green icon button' title='Add new product'><i class='plus icon'></i>Add product</button></a> <!-- Add new product -->
            </div> <!-- row -->
            <div class='row'>
                <div class='sixteen wide column'>
                    <div class='ui four stackable cards'>
                        <a class='ui small card' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/MEALS'> 
                            <div class='center aligned middle aligned content' id='superadmin-card'>
                                <img src='<?php echo base_url("assets/images/meals.svg")?>' class='ui small image'>
                                <div class='header' id='userHeader'>
                                    MEALS
                                </div>
                            </div>
                        </a> <!-- category card -->

                        <a class='ui small card' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/DRINKS'>
                            
                            <div class='center aligned middle aligned content' id='superadmin-card'>
                                <img src='<?php echo base_url("assets/images/drinks.svg")?>' class='ui small image'>
                                <div class='header' id='userHeader'>
                                    DRINKS
                                </div>
                            </div>
                        </a> <!-- category card -->

                        <a class='ui small card' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/DESSERTS'>
                            
                            <div class='center aligned middle aligned content' id='superadmin-card'>
                                <img src='<?php echo base_url("assets/images/desserts.svg")?>' class='ui small image'>
                                <div class='header' id='userHeader'>
                                    DESSERTS
                                </div>
                            </div>
                        </a> <!-- category card -->

                        <a class='ui small card' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/EXTRAS'>
                            
                            <div class='center aligned middle aligned content' id='superadmin-card'>
                                <img src='<?php echo base_url("assets/images/extras.svg")?>' class='ui small image'>
                                <div class='header' id='userHeader'>
                                    EXTRAS
                                </div>
                            </div>
                        </a> <!-- category card -->
                    </div> <!-- stackable cards -->
                </div> <!-- sixteen wide column -->
            </div> <!-- row -->

            <div class='row'></div> <!-- row -->

            <div class='two column row'>
                <div class='middle aligned column'>
                    Pages 1 out of 1 pages.
                </div>
                <div class='right aligned column'>
                    <div class='ui pagination menu'>
                        <a class='active item'>1</a>
                    </div> <!-- pagination -->
                </div>
            </div> <!-- two column row -->

        </div> <!-- ui grid -->
    </div> <!-- segment -->
  </div> <!-- pusher -->
</div> <!-- bottom attached segment -->


</body>
</html> 
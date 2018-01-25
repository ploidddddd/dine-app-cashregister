<div class="pusher">
    <div class='ui hidden divider'></div>
    <div class='ui padded basic segment'>
        <!-- header -->
        <div class='ui basic segment'>
            <h1 class="ui brown dividing header">
                <i class="bar chart icon"></i>
                <div class="content">
                  REPORTS
                  <div class="sub header">Shows the reports</div>
                </div>
            </h1> <!-- header -->
            <div class='ui breadcrumb'>
                <a class='section' href='<?php echo site_url()?>/CUser/viewAdminDashboard'>HOME</a>
                <i class='right arrow icon divider'></i>
                <div class='active section'>REPORTS</div>
            </div> <!-- breadcrumb -->
        </div> <!-- segment -->
        <!-- end of header -->


        <!-- content -->
    <div class='ui segments'>
      <div class='ui basic segment'> 
        <h5 class='ui header brown ribbon label'><i class='bar chart icon'></i>Reports</h5>
        <div class="ui hidden divider"></div>
        <div class="ui top attached tabular menu">
          <a class="active item" data-tab="first" id="first">Overall</a>
          <a class="item" data-tab="second" id="second">Daily</a>
          <a class="item" data-tab="third" id="third" >Weekly</a>
          <a class="item" data-tab="fourth" id="fourth">Monthly</a>
        </div>

        <div class="ui bottom attached active tab segment" data-tab="first">
          <div class="ui grid">
            <div class=" eight wide column">
              <h3 class="ui grey dividing header">
                  <div class="content">
                    SOLD PRODUCTS (OVERALL)
                    <!-- <div class="sub header">Shows the list of orders</div> -->
                  </div>
              </h3> <!-- header -->
              <div class="ui hidden divider"></div>
              <table class='ui sortable stackable celled table' id="all">
                <thead>
                  <tr> 
                    <td><b>Product Name</b></td>
                    <td><b>Product Quantity</b></td>  
                    <td><b>Product Total</b></td>
                  </tr>
                </thead>
                <?php
                  foreach($data as $row){
                    ?>
                    <tr>
                      <td><?php echo $row->product_name; ?></td>
                      <td><?php echo $row->quantity; ?></td>
                      <td><?php echo $row->subtotal; ?></td>
                    </tr>
                    <?php
                  }
                ?>
              </table>
            </div>
            <div class="eight wide column">
              <div id="piechart" style="width: 500; height: 500px;"></div>
            </div>

            <div class=" eight wide column">
              <h3 class="ui grey dividing header">
                  <div class="content">
                    SALES (OVERALL)
                    <!-- <div class="sub header">Shows the list of orders</div> -->
                  </div>
              </h3> <!-- header -->
              <div class="ui hidden divider"></div>
              <table class='ui sortable stackable celled table' id="receipt_all">
                <thead>
                  <tr> 
                    <td><b>Receipt ID</b></td>
                    <td><b>Receipt Date</b></td>  
                    <td><b>Receipt Total</b></td>
                    <td><b>Cashier</b></td>
                    <td><b>Actions</b></td>
                  </tr>
                </thead>
                <?php
                  foreach($receipt as $row){
                    ?>
                    <tr>
                      <td><?php echo $row->receipt_id; ?></td>
                      <td><?php echo $row->receipt_date?></td>
                      <td><?php echo $row->receipt_total; ?></td>
                      <td><?php echo $row->receipt_cashier; ?></td>
                      <td><a href="<?php echo site_url()?>/CReports/viewInfo/<?php echo $row->receipt_id?>"><button class="ui inverted blue icon button">
                                        <i class="unhide icon"></i>
                                    </button></a></td>
                    </tr>
                    <?php
                  }
                ?>
              </table>
            </div>

            <?php
                foreach($overall as $row){
                  ?>
                  <h1>Total Sales: <?php echo $row->total?></h1>
                  <?php
                }
            ?>


            <div class="sixteen wide center aligned middle aligned column">
              <h3 class="ui grey dividing header">
                <div class="content">
                  DAILY SALES
                </div>
              </h3> <!-- header -->
              <div class='ui container'>
                <div id="curve_chart" align="center"></div>
              </div>
            </div>
            <div class="sixteen wide center aligned middle aligned column">
              <h3 class="ui grey dividing header">
                <div class="content">
                  WEEKLY SALES
                </div>
              </h3> <!-- header -->
              <div class='ui container'>
                <div id="curve_chart2" align="center"></div>
              </div>
            </div>
            <div class="sixteen wide center aligned middle aligned column">
              <h3 class="ui grey dividing header">
                <div class="content">
                  MONTHLY SALES
                </div>
              </h3> <!-- header -->
              <div class='ui container'>
                <div id="curve_chart3" align="center"></div>
              </div>
            </div>
          </div>
      </div>

      <div class="ui bottom attached tab segment" data-tab="second">
        <div class="ui two column grid">
          <div class="column">
            <h3 class="ui grey dividing header">
                <div class="content">
                  SOLD PRODUCTS (DAILY)
                  <!-- <div class="sub header">Shows the list of orders</div> -->
                </div>
            </h3> <!-- header -->
            <div class="ui hidden divider"></div>
            <table class='ui sortable stackable celled table' id="daily">
              <thead>
                <tr> 
                  <td><b>Product Name</b></td>
                  <td><b>Product Quantity</b></td>  
                  <td><b>Product Total</b></td>
                </tr>
              </thead>
              <?php
                foreach($datad as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->product_name; ?></td>
                    <td><?php echo $row->quantity; ?></td>
                    <td><?php echo $row->subtotal; ?></td>
                  </tr>
                  <?php
                }
              ?>
            </table>
          </div>
          <div class="column">
            <h3 class="ui grey dividing header">
                <div class="content">
                  DAILY SALES
                  <!-- <div class="sub header">Shows the list of orders</div> -->
                </div>
            </h3> <!-- header -->
            <div id="curve_chart4"></div>
          </div>


            <div class=" eight wide column">
              <h3 class="ui grey dividing header">
                  <div class="content">
                    SALES (DAILY)
                    <!-- <div class="sub header">Shows the list of orders</div> -->
                  </div>
              </h3> <!-- header -->
              <div class="ui hidden divider"></div>
              <table class='ui sortable stackable celled table' id="receipt_day">
                <thead>
                  <tr> 
                    <td><b>Receipt ID</b></td>
                    <td><b>Receipt Date</b></td>  
                    <td><b>Receipt Total</b></td>
                    <td><b>Cashier</b></td>
                    <td><b>Actions</b></td>
                  </tr>
                </thead>
                <?php
                  foreach($receipt_day as $row){
                    ?>
                    <tr>
                      <td><?php echo $row->receipt_id; ?></td>
                      <td><?php echo $row->receipt_date?></td>
                      <td><?php echo $row->receipt_total; ?></td>
                      <td><?php echo $row->receipt_cashier; ?></td>
                      <td><a href="<?php echo site_url()?>/CReports/viewInfo/<?php echo $row->receipt_id?>"><button class="ui inverted blue icon button">
                                        <i class="unhide icon"></i>
                                    </button></a></td>
                    </tr>
                    <?php
                  }
                ?>
              </table>
            </div>
            <?php
                foreach($day as $row){
                  ?>
                  <h1>Total Sales of The Day: <?php echo $row->total?></h1>
                  <?php
                }
            ?>





        </div>
      </div>

      <div class="ui bottom attached tab segment" data-tab="third">
        <div class="ui two column grid">
          <div class="column">
            <h3 class="ui grey dividing header">
                <div class="content">
                  SOLD PRODUCTS (WEEKLY)
                  <!-- <div class="sub header">Shows the list of orders</div> -->
                </div>
            </h3> <!-- header -->
            <div class="ui hidden divider"></div>
            <table class='ui sortable stackable celled table' id="weekly">
              <thead>
                <tr> 
                  <td><b>Product Name</b></td>
                  <td><b>Product Quantity</b></td>  
                  <td><b>Product Total</b></td>
                </tr>
              </thead>
              <?php
                foreach($dataw as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->product_name; ?></td>
                    <td><?php echo $row->quantity; ?></td>
                    <td><?php echo $row->subtotal; ?></td>
                  </tr>
                  <?php
                }
              ?>
            </table>
          </div>
          <div class="column">
            <h3 class="ui grey dividing header">
                <div class="content">
                  WEEKLY SALES
                  <!-- <div class="sub header">Shows the list of orders</div> -->
                </div>
            </h3> <!-- header -->
            <div id="curve_chart5"></div>
          </div>


            <div class=" eight wide column">
              <h3 class="ui grey dividing header">
                  <div class="content">
                    SALES (WEEKLY)
                    <!-- <div class="sub header">Shows the list of orders</div> -->
                  </div>
              </h3> <!-- header -->
              <div class="ui hidden divider"></div>
              <table class='ui sortable stackable celled table' id="receipt_week">
                <thead>
                  <tr> 
                    <td><b>Receipt ID</b></td>
                    <td><b>Receipt Date</b></td>  
                    <td><b>Receipt Total</b></td>
                    <td><b>Cashier</b></td>
                    <td><b>Actions</b></td>
                  </tr>
                </thead>
                <?php
                  foreach($receipt_week as $row){
                    ?>
                    <tr>
                      <td><?php echo $row->receipt_id; ?></td>
                      <td><?php echo $row->receipt_date?></td>
                      <td><?php echo $row->receipt_total; ?></td>
                      <td><?php echo $row->receipt_cashier; ?></td>
                      <td><a href="<?php echo site_url()?>/CReports/viewInfo/<?php echo $row->receipt_id?>"><button class="ui inverted blue icon button">
                                        <i class="unhide icon"></i>
                                    </button></a></td>
                    </tr>
                    <?php
                  }
                ?>
              </table>
            </div>
            <?php
                foreach($weekly as $row){
                  ?>
                  <h1>Total Sales of The Week: <?php echo $row->total?></h1>
                  <?php
                }
            ?>




        </div>
      </div>

      <div class="ui bottom attached tab segment" data-tab="fourth">
        <div class="ui two column grid">
          <div class="column">
            <h3 class="ui grey dividing header">
                <div class="content">
                  SOLD PRODUCTS (MONTHLY)
                  <!-- <div class="sub header">Shows the list of orders</div> -->
                </div>
            </h3> <!-- header -->
            <div class="ui hidden divider"></div>
            <table class='ui sortable stackable celled table' id="monthly">
              <thead>
                <tr> 
                  <td><b>Product Name</b></td>
                  <td><b>Product Quantity</b></td>  
                  <td><b>Product Total</b></td>
                </tr>
              </thead>
              <?php
                foreach($datam as $row){
                  ?>
                  <tr>
                    <td><?php echo $row->product_name; ?></td>
                    <td><?php echo $row->quantity; ?></td>
                    <td><?php echo $row->subtotal; ?></td>
                  </tr>
                  <?php
                }
              ?>
            </table>
          </div>
          <div class="column">
            <h3 class="ui grey dividing header">
                <div class="content">
                  MONTHLY SALES
                  <!-- <div class="sub header">Shows the list of orders</div> -->
                </div>
            </h3> <!-- header -->
            <div id="curve_chart6"></div>
          </div>



            <div class=" eight wide column">
              <h3 class="ui grey dividing header">
                  <div class="content">
                    SALES (MONTHLY)
                    <!-- <div class="sub header">Shows the list of orders</div> -->
                  </div>
              </h3> <!-- header -->
              <div class="ui hidden divider"></div>
              <table class='ui sortable stackable celled table' id="receipt_month">
                <thead>
                  <tr> 
                    <td><b>Receipt ID</b></td>
                    <td><b>Receipt Date</b></td>  
                    <td><b>Receipt Total</b></td>
                    <td><b>Cashier</b></td>
                    <td><b>Actions</b></td>
                  </tr>
                </thead>
                <?php
                  foreach($receipt_month as $row){
                    ?>
                    <tr>
                      <td><?php echo $row->receipt_id; ?></td>
                      <td><?php echo $row->receipt_date?></td>
                      <td><?php echo $row->receipt_total; ?></td>
                      <td><?php echo $row->receipt_cashier; ?></td>
                      <td><a href="<?php echo site_url()?>/CReports/viewInfo/<?php echo $row->receipt_id?>"><button class="ui inverted blue icon button">
                                        <i class="unhide icon"></i>
                                    </button></a></td>
                    </tr>
                    <?php
                  }
                ?>
              </table>
            </div>
            <?php
                foreach($monthly as $row){
                  ?>
                  <h1>Total Sales of The month: <?php echo $row->total?></h1>
                  <?php
                }
            ?>






        </div>
      </div>

      





        

      </div> <!-- segment -->
    </div> <!-- segments -->

        <!-- end of content -->
  </div> <!-- padded segment -->        
</div> <!-- pusher -->

<script type="text/javascript">
    $(document).ready(function() {
      $('.menu .item').tab();
        var flag=0;
        $(document).on('click', '#third', function(){
            <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
            if(flag==0){
                $('#weekly').DataTable({
                    // "ajax" : {
                    //     url: "<?php echo site_url();?>/CReports/getWeekly",
                    //     type : 'GET',
                    // },
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            title: 'Weekly Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Scanned orders from dine-app.net',
                            title: 'Weekly Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Scanned orders from dine-app.net',
                            title: 'Weekly Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                        }
                    ]
                });
                flag++;
            }
        });

        
    } );
    $(document).ready(function() {
        <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
        $('#all').DataTable({
            // "ajax" : {
            //     url: "<?php echo site_url();?>/CReports/getAll",
            //     type : 'GET',
            // },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0, 1, 2]
                    },
                    title: 'All Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [0, 1, 2]
                    },
                    messageTop: 'This PDF contains all orders from dine-app.net',
                    title: 'All Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2]
                    },
                    messageTop: 'This PDF contains all orders from dine-app.net',
                    title: 'All Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                }
            ]
            
        });
    } );

    $(document).ready(function() {
        var flag=0;
        $(document).on('click', '#second', function(){
            <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
            if(flag==0){
                $('#daily').DataTable({
                    // "ajax" : {
                    //     url: "<?php echo site_url();?>/CReports/getDaily",
                    //     type : 'GET',
                    // },
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            title: 'Daily Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Daily Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Daily Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        }
                    ]
                });
                flag++;
            }
        });
    } );

    $(document).ready(function() {
        var flag=0;
        $(document).on('click', '#fourth', function(){
            <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
            if(flag==0){
                $('#monthly').DataTable({
                    // "ajax" : {
                    //     url: "<?php echo site_url();?>/CReports/getDaily",
                    //     type : 'GET',
                    // },
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            title: 'Monthly Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Monthly Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Monthly Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        }
                    ]
                });
                flag++;
            }
        });
    } );
 
</script>



<script type="text/javascript">
    $(document).ready(function() {
      $('.menu .item').tab();
        var flag=0;
        $(document).on('click', '#third', function(){
            <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
            if(flag==0){
                $('#receipt_week').DataTable({
                    // "ajax" : {
                    //     url: "<?php echo site_url();?>/CReports/getWeekly",
                    //     type : 'GET',
                    // },
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            title: 'Weekly Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Scanned orders from dine-app.net',
                            title: 'Weekly Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Scanned orders from dine-app.net',
                            title: 'Weekly Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                        }
                    ]
                });
                flag++;
            }
        });

        
    } );
    $(document).ready(function() {
        <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
        $('#receipt_all').DataTable({
            // "ajax" : {
            //     url: "<?php echo site_url();?>/CReports/getAll",
            //     type : 'GET',
            // },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0, 1, 2]
                    },
                    title: 'All Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [0, 1, 2]
                    },
                    messageTop: 'This PDF contains all orders from dine-app.net',
                    title: 'All Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2]
                    },
                    messageTop: 'This PDF contains all orders from dine-app.net',
                    title: 'All Products Sales_<?php echo $now->format('Y-m-d'); ?>'
                }
            ]
            
        });
    } );

    $(document).ready(function() {
        var flag=0;
        $(document).on('click', '#second', function(){
            <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
            if(flag==0){
                $('#receipt_day').DataTable({
                    // "ajax" : {
                    //     url: "<?php echo site_url();?>/CReports/getDaily",
                    //     type : 'GET',
                    // },
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            title: 'Daily Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Daily Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Daily Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        }
                    ]
                });
                flag++;
            }
        });
    } );

    $(document).ready(function() {
        var flag=0;
        $(document).on('click', '#fourth', function(){
            <?php $now = new DateTime(NULL, new DateTimeZone('Asia/Manila')); ?>
            if(flag==0){
                $('#receipt_month').DataTable({
                    // "ajax" : {
                    //     url: "<?php echo site_url();?>/CReports/getDaily",
                    //     type : 'GET',
                    // },
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            title: 'Monthly Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Monthly Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, 1, 2]
                            },
                            messageTop: 'This PDF contains Pending orders from dine-app.net',
                            title: 'Monthly Product Sales_<?php echo $now->format('Y-m-d'); ?>'
                        }
                    ]
                });
                flag++;
            }
        });
    } );
 
</script>




<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Product', 'Quantity Sold'],
          // ['Basketball',50],
          // ['Dota',30],
          // ['Academics',20]
          <?php
      foreach($data as $row){
        echo "['".$row->product_name."',".$row->quantity."],";
        
      }          
          ?>
        ]);

        var options = {
          title: 'chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        <?php
        if($daily1 != 0){
              foreach($daily1 as $row){
                if($row->total != 0){
                  echo "['1',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily2 != 0){
              foreach($daily2 as $row){
                if($row->total != 0){
                  echo "['2',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily3 != 0){
              foreach($daily3 as $row){
                if($row->total != 0){
                  echo "['3',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily4 != 0){
              foreach($daily4 as $row){
                if($row->total != 0){
                  echo "['4',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily5 != 0){
              foreach($daily5 as $row){
                if($row->total != 0){
                  echo "['5',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily6 != 0){
              foreach($daily6 as $row){
                if($row->total != 0){
                  echo "['6',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily7 != 0){
              foreach($daily7 as $row){
                if($row->total != 0){
                  echo "['7',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily8 != 0){
              foreach($daily8 as $row){
                if($row->total != 0){
                  echo "['8',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily9 != 0){
              foreach($daily9 as $row){
                if($row->total != 0){
                  echo "['9',".$row->total.",'#99ccff'],";
                } 
              }
            }

            if($daily10 != 0){
              foreach($daily10 as $row){
                if($row->total != 0){
                  echo "['10',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily11 != 0){
              foreach($daily11 as $row){
                if($row->total != 0){
                  echo "['11',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily12 != 0){
              foreach($daily12 as $row){
                if($row->total != 0){
                  echo "['12',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily13 != 0){
              foreach($daily13 as $row){
                if($row->total != 0){
                  echo "['13',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily14 != 0){
              foreach($daily14 as $row){
                if($row->total != 0){
                  echo "['14',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily15 != 0){
              foreach($daily15 as $row){
                if($row->total != 0){
                  echo "['15',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily16 != 0){
              foreach($daily16 as $row){
                if($row->total != 0){
                  echo "['16',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily17 != 0){
              foreach($daily17 as $row){
                if($row->total != 0){
                  echo "['17',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily18 != 0){
              foreach($daily18 as $row){
                if($row->total != 0){
                  echo "['18',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily19 != 0){
              foreach($daily19 as $row){
                if($row->total != 0){
                  echo "['19',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily20 != 0){
              foreach($daily20 as $row){
                if($row->total != 0){
                  echo "['20',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily21 != 0){
              foreach($daily21 as $row){
                if($row->total != 0){
                  echo "['21',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily22 != 0){
              foreach($daily22 as $row){
                if($row->total != 0){
                  echo "['22',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily23 != 0){
              foreach($daily23 as $row){
                if($row->total != 0){
                  echo "['23',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily24 != 0){
              foreach($daily24 as $row){
                if($row->total != 0){
                  echo "['24',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily25 != 0){
              foreach($daily25 as $row){
                if($row->total != 0){
                  echo "['25',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily26 != 0){
              foreach($daily26 as $row){
                if($row->total != 0){
                  echo "['26',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily27 != 0){
              foreach($daily27 as $row){
                if($row->total != 0){
                  echo "['27',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily28 != 0){
              foreach($daily28 as $row){
                if($row->total != 0){
                  echo "['28',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily29 != 0){
              foreach($daily29 as $row){
                if($row->total != 0){
                  echo "['29',".$row->total.",'#99ccff'],";
                }else{
                  echo "['29',0,'blue'],";
                }
              }
            }

            if($daily30 != 0){
              foreach($daily30 as $row){
                if($row->total != 0){
                  echo "['30',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily31 != 0){
              foreach($daily31 as $row){
                if($row->total != 0){
                  echo "['31',".$row->total.",'#99ccff'],";
                }
              }
            }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("curve_chart"));
      chart.draw(view, options);
  }
  </script>


      <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        <?php
        if($daily1 != 0){
              foreach($daily1 as $row){
                if($row->total != 0){
                  echo "['1',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily2 != 0){
              foreach($daily2 as $row){
                if($row->total != 0){
                  echo "['2',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily3 != 0){
              foreach($daily3 as $row){
                if($row->total != 0){
                  echo "['3',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily4 != 0){
              foreach($daily4 as $row){
                if($row->total != 0){
                  echo "['4',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily5 != 0){
              foreach($daily5 as $row){
                if($row->total != 0){
                  echo "['5',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily6 != 0){
              foreach($daily6 as $row){
                if($row->total != 0){
                  echo "['6',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily7 != 0){
              foreach($daily7 as $row){
                if($row->total != 0){
                  echo "['7',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily8 != 0){
              foreach($daily8 as $row){
                if($row->total != 0){
                  echo "['8',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily9 != 0){
              foreach($daily9 as $row){
                if($row->total != 0){
                  echo "['9',".$row->total.",'#99ccff'],";
                } 
              }
            }

            if($daily10 != 0){
              foreach($daily10 as $row){
                if($row->total != 0){
                  echo "['10',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily11 != 0){
              foreach($daily11 as $row){
                if($row->total != 0){
                  echo "['11',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily12 != 0){
              foreach($daily12 as $row){
                if($row->total != 0){
                  echo "['12',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily13 != 0){
              foreach($daily13 as $row){
                if($row->total != 0){
                  echo "['13',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily14 != 0){
              foreach($daily14 as $row){
                if($row->total != 0){
                  echo "['14',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily15 != 0){
              foreach($daily15 as $row){
                if($row->total != 0){
                  echo "['15',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily16 != 0){
              foreach($daily16 as $row){
                if($row->total != 0){
                  echo "['16',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily17 != 0){
              foreach($daily17 as $row){
                if($row->total != 0){
                  echo "['17',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily18 != 0){
              foreach($daily18 as $row){
                if($row->total != 0){
                  echo "['18',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily19 != 0){
              foreach($daily19 as $row){
                if($row->total != 0){
                  echo "['19',".$row->total.",'#99ccff#99ccff'],";
                }
              }
            }

            if($daily20 != 0){
              foreach($daily20 as $row){
                if($row->total != 0){
                  echo "['20',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily21 != 0){
              foreach($daily21 as $row){
                if($row->total != 0){
                  echo "['21',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily22 != 0){
              foreach($daily22 as $row){
                if($row->total != 0){
                  echo "['22',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily23 != 0){
              foreach($daily23 as $row){
                if($row->total != 0){
                  echo "['23',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily24 != 0){
              foreach($daily24 as $row){
                if($row->total != 0){
                  echo "['24',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily25 != 0){
              foreach($daily25 as $row){
                if($row->total != 0){
                  echo "['25',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily26 != 0){
              foreach($daily26 as $row){
                if($row->total != 0){
                  echo "['26',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily27 != 0){
              foreach($daily27 as $row){
                if($row->total != 0){
                  echo "['27',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily28 != 0){
              foreach($daily28 as $row){
                if($row->total != 0){
                  echo "['28',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily29 != 0){
              foreach($daily29 as $row){
                if($row->total != 0){
                  echo "['29',".$row->total.",'#99ccff'],";
                }else{
                  echo "['29',0,'blue'],";
                }
              }
            }

            if($daily30 != 0){
              foreach($daily30 as $row){
                if($row->total != 0){
                  echo "['30',".$row->total.",'#99ccff'],";
                }
              }
            }

            if($daily31 != 0){
              foreach($daily31 as $row){
                if($row->total != 0){
                  echo "['31',".$row->total.",'#99ccff'],";
                }
              }
            }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
     
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("curve_chart4"));
      chart.draw(view, options);
  }
  </script>


  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        <?php
        if($weekly3 != 0){
            foreach($weekly3 as $row){
              if($row->total != 0){
                echo "['1st Week',".$row->total.",'#99ccff'],";
              }
            }
          }

          if($weekly2 != 0){
            if($weekly3 != 0){
              foreach($weekly2 as $row){
                if($row->total != 0){
                  echo "['2nd Week',".$row->total.",'#99ccff'],";
                }
              }
            }else{
              foreach($weekly2 as $row){
                if($row->total != 0){
                  echo "['1st Week',".$row->total.",'#99ccff'],";
                }
              }
            }
          }

          if($weekly1 != 0){
            if($weekly2 != 0){
              if($weekly3 != 0){
                foreach($weekly1 as $row){
                  if($row->total != 0){
                    echo "['3rd Week',".$row->total.",'#99ccff'],";
                  }
                }
              }else{
                foreach($weekly1 as $row){
                  if($row->total != 0){
                    echo "['2nd Week',".$row->total.",'#99ccff'],";
                  }
                }
              }
            }else{
              foreach($weekly1 as $row){
                if($row->total != 0){
                  echo "['1st Week',".$row->total.",'#99ccff'],";
                }
              }
            }
          }

          foreach($weekly as $row){
            if($row->total != 0){
              echo "['Current Week',".$row->total.",'#99ccff'],";
            }
          }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
       
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("curve_chart2"));
      chart.draw(view, options);
  }
  </script>


  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        <?php
            if($weekly3 != 0){
            foreach($weekly3 as $row){
              if($row->total != 0){
                echo "['1st Week',".$row->total.",'#99ccff'],";
              }
            }
          }

          if($weekly2 != 0){
            if($weekly3 != 0){
              foreach($weekly2 as $row){
                if($row->total != 0){
                  echo "['2nd Week',".$row->total.",'#99ccff'],";
                }
              }
            }else{
              foreach($weekly2 as $row){
                if($row->total != 0){
                  echo "['1st Week',".$row->total.",'#99ccff'],";
                }
              }
            }
          }

          if($weekly1 != 0){
            if($weekly2 != 0){
              if($weekly3 != 0){
                foreach($weekly1 as $row){
                  if($row->total != 0){
                    echo "['3rd Week',".$row->total.",'#99ccff'],";
                  }
                }
              }else{
                foreach($weekly1 as $row){
                  if($row->total != 0){
                    echo "['2nd Week',".$row->total.",'#99ccff'],";
                  }
                }
              }
            }else{
              foreach($weekly1 as $row){
                if($row->total != 0){
                  echo "['1st Week',".$row->total.",'#99ccff'],";
                }
              }
            }
          }

          foreach($weekly as $row){
            if($row->total != 0){
              echo "['Current Week',".$row->total.",'#99ccff'],";
            }
          }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
       
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("curve_chart5"));
      chart.draw(view, options);
  }
  </script>


  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        <?php
         if($monthly11 != 0){
            foreach($monthly11 as $row){
              if($row->total != 0){
                echo "['November',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly10 != 0){
            foreach($monthly10 as $row){
              if($row->total != 0){
                echo "['October',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly9 != 0){
            foreach($monthly9 as $row){
              if($row->total != 0){
                echo "['September',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly8 != 0){
            foreach($monthly8 as $row){
              if($row->total != 0){
                echo "['August',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly7 != 0){
            foreach($monthly7 as $row){
              if($row->total != 0){
                echo "['July',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly6 != 0){
            foreach($monthly6 as $row){
              if($row->total != 0){
                echo "['June',".$row->total.",'99ccff'],";
              }
            }
          }    

          if($monthly5 != 0){
            foreach($monthly5 as $row){
              if($row->total != 0){
                echo "['May',".$row->total.",'99ccff'],";
              }
            }
          }      

          if($monthly4 != 0){
            foreach($monthly4 as $row){
              if($row->total != 0){
                echo "['April',".$row->total.",'blue'],";
              }
            }
          } 

          if($monthly3 != 0){
            foreach($monthly3 as $row){
              if($row->total != 0){
                echo "['March',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly2 != 0){
            foreach($monthly2 as $row){
              if($row->total != 0){
                echo "['February',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly1 != 0){
            foreach($monthly1 as $row){
              if($row->total != 0){
                echo "['January',".$row->total.",'99ccff'],";
              }
            }
          }

          foreach($monthly as $row){
            if($row->total != 0){
              echo "['Current Month',".$row->total.",'99ccff'],";
            }
          }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
       
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("curve_chart3"));
      chart.draw(view, options);
  }
  </script>


  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        <?php
         if($monthly11 != 0){
            foreach($monthly11 as $row){
              if($row->total != 0){
                echo "['November',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly10 != 0){
            foreach($monthly10 as $row){
              if($row->total != 0){
                echo "['October',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly9 != 0){
            foreach($monthly9 as $row){
              if($row->total != 0){
                echo "['September',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly8 != 0){
            foreach($monthly8 as $row){
              if($row->total != 0){
                echo "['August',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly7 != 0){
            foreach($monthly7 as $row){
              if($row->total != 0){
                echo "['July',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly6 != 0){
            foreach($monthly6 as $row){
              if($row->total != 0){
                echo "['June',".$row->total.",'99ccff'],";
              }
            }
          }    

          if($monthly5 != 0){
            foreach($monthly5 as $row){
              if($row->total != 0){
                echo "['May',".$row->total.",'99ccff'],";
              }
            }
          }      

          if($monthly4 != 0){
            foreach($monthly4 as $row){
              if($row->total != 0){
                echo "['April',".$row->total.",'blue'],";
              }
            }
          } 

          if($monthly3 != 0){
            foreach($monthly3 as $row){
              if($row->total != 0){
                echo "['March',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly2 != 0){
            foreach($monthly2 as $row){
              if($row->total != 0){
                echo "['February',".$row->total.",'99ccff'],";
              }
            }
          }

          if($monthly1 != 0){
            foreach($monthly1 as $row){
              if($row->total != 0){
                echo "['January',".$row->total.",'99ccff'],";
              }
            }
          }

          foreach($monthly as $row){
            if($row->total != 0){
              echo "['Current Month',".$row->total.",'99ccff'],";
            }
          }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
       
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("curve_chart6"));
      chart.draw(view, options);
  }
  </script>

</body>
</html>

<div class="pusher">
    <div class='ui basic segment'>
        <h1 class="ui blue dividing header">
            <i class="dashboard icon"></i>
            <div class="content">
              USERS
              <div class="sub header">Add a new user</div>
            </div>
        </h1> <!-- header -->
        <div class='ui breadcrumb'>
            <a class='section' href='<?php echo site_url()?>/CUser/viewSuperadminDashboard'>HOME</a>
            <i class='right arrow icon divider'></i>
            <a class='section' href='<?php echo site_url()?>/CUser/viewUsersList'>USERS</a>
            <i class='right arrow icon divider'></i>
            <div class='active section'>ADD USER</div>
        </div> <!-- breadcrumb -->
    </div> <!-- segment -->
    <h3 class="ui horizontal header divider">
        User Information
    </h3>
    <div class='ui segment'> 
        <div class='ui stackable padded grid'>
            <div class='row'>
                <?php if (isset($user)) {?>
                    <?php foreach ($user as $u) { ?>
                
                <div class='eight wide column'>
                    <form class='ui form' method="POST" action="<?php echo site_url()?>/CUser/updateUser/<?php echo $u->user_id; ?> ">
                    <h3 class='ui horizontal divider header'>
                        <i class='address card outline icon'></i> User Personal Information
                    </h3>

                    <div class='required field'><label>FIRST NAME</label><input type='text' placeholder='Enter first name' name="fname" value="<?php echo $u->user_first_name;?>"></div>

                    <div class='required field'><label>MIDDLE NAME</label><input type='text' placeholder='Enter middle name' name="mname" value="<?php echo $u->user_mi;?>"></div>

                    <div class='required field'><label>LAST NAME</label><input type='text' placeholder='Enter last name' name="lname" value="<?php echo $u->user_last_name;?>"></div>
                </div>
                <div class='eight wide column'>
                    <h3 class='ui horizontal divider header'><i class='user icon'></i>User Account Information</h3>

                    <label>POSITION</label><br>
                    <select class="ui dropdown">
                      <option value="">Choose position</option>
                      <option value="1">Superadmin</option>
                      <option value="2">Admin</option>
                      <option value="3">Employee</option>
                    </select> <!-- position dropdown -->

                </div>
            </div> <!-- row -->
            <div class='row'>
                <a href="<?php echo site_url()?>/CUser/viewUsersList?>"><div class='ui submit gray button'>Cancel</div></a>

                <button class='ui submit blue button' type='submit'>Edit</button>

                </form> <!-- form -->
            </div>
                <?php } ?>
                <?php } ?>
            <div class='row'></div> <!-- row -->

        </div> <!-- ui grid -->
    </div> <!-- segment -->
  </div> <!-- pusher -->
</div> <!-- bottom attached segment -->


</body>
</html>

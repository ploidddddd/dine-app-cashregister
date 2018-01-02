<div class="pusher">
    <div class='ui basic segment'>
        <h1 class="ui blue dividing header">
            <i class="dashboard icon"></i>
            <div class="content">
              USERS
              <div class="sub header">Shows the information of the user</div>
            </div>
        </h1> <!-- header -->
        <div class='ui breadcrumb'>
            <a class='section' href='<?php echo site_url()?>/CUser/viewSuperadminDashboard'>HOME</a>
            <i class='right arrow icon divider'></i>
            <a class='section' href='<?php echo site_url()?>/CUser/viewUsersList'>USERS</a>
            <i class='right arrow icon divider'></i>
            <div class='active section'>USER INFORMATION</div>
        </div> <!-- breadcrumb -->
    </div> <!-- segment -->
    <h3 class="ui horizontal header divider">
        User Information
    </h3>
    <div class='ui segment'> 
        <div class='ui stackable padded grid'>
            <?php if (isset($user)) {?>
            <?php foreach ($user as $u) { ?>
            <div class='row'>
                <a href='<?php echo site_url()?>/CUser/editUserInfo/<?php echo $u->user_id; ?> ''><button class='ui circular blue icon button' title='Edit user information'><i class='pencil icon'></i>Edit info</button></a>

                <button class='ui circular red icon button' title='Remove user' id='deleteUser' data-id="<?php echo $u->user_id; ?>" ><i class='remove icon'></i>Remove user</button>
            </div>
            <div class='row'>
                <div class='sixteen wide column'>
                    <table class='ui large very basic table'>
                        <tbody>
                            <tr> 
                                <td>NAME</td>
                                <td><?php echo $u->user_first_name.' '.$u->user_mi.'. '.$u->user_last_name; ?></td>
                            </tr>
                            <tr>
                                <td>USER ID</td>
                                <td><?php echo $u->user_id; ?> </td>
                            </tr>
                            <tr>
                                <td>POSITION</td>
                                <td><?php echo $u->user_type; ?> </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php } ?>
                <?php } ?>
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


<div class="ui mini modal" id="confirmDelete">
    
        <div class="header">Delete account</div>
        <div class="content">
            <form action="<?php echo site_url()?>/CUser/deleteUser" method="POST" >
                <input type="hidden" name="user_id" id="user_id">
            <p>Are you sure you want to delete this account?</p>
        </div>
        <div class="actions">
            <div class="ui cancel gray button">Cancel</div>
            <button class="ui approve blue button" type="submit">Yes</div>
            </form>
        </div>
    
</div>

</body>
</html>

<script>
$(document).ready(function(){
    $('#deleteUser').click(function(){
        var id = $(this).data("id");
        $('#user_id').val(id);
        $('#confirmDelete').modal('show');
    });
});
</script>
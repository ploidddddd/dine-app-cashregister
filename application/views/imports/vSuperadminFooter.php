
<script>
$(document).ready(function(){
	//Initializes dropdown
	$('.ui.dropdown').dropdown();

	//Change Password Modal
	$('#changePass').click(function(){
		$('#confirmUpdate').modal('show');
	}); 

	//Cancel Modal
	$('#confirmCancel').click(function(){
        $('#cancelModal').modal('show');
    });

	// Cancel Modal (when breadcrumb is clicked)
    $('.confirmCancelBR').click(function(){
        $('#cancelModal').modal('show');
    });

    $('.confirmCancelHome').click(function(){
        $('#cancelModalHome').modal('show');
    });
    
    // Shows sidebar
    $('.ui.sidebar').sidebar({ 
    					context: $('.pushable'),
    					dimPage: false
    				})
                    .sidebar('attach events', '.toggleMenu')
    ;
	
	// Prevents modal from closing when clicked outside
	$('.ui.modal').modal('setting', 'closable', false);
}); 


// $(document).ready(function(){
// 	$(document).on('change','#old',function() {
// 		var temp = $('#pass').val();
// 		var shaObj = new jsSHA($('#old').val(), 'ASCII');
// 		var hash = shaObj.getHash('SHA-512','HEX');
// 		if (hash == temp){
// 			alert('match');
// 		} else {
// 			alert('mismatch');
// 		}
// 		//classes sa if
//     });

// 	$(document).on('change','#new',function() {
// 		//put classes
//     });

// 	$(document).on('keyup','#confirm',function() {
// 		var newPass = $('#new').val();
// 		var confirmPass = $('#confirm').val();
// 		if (confirmPass == newPass){
// 			alert('match');
// 		} 
// 		//classes sa if
//     });

// }); 

</script> 
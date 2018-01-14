	<div class="row"></div>
	<div class="row">
		<div class="column"></div>
		<div class="six wide column">
			<h1 class="ui grey dividing header">
		        <img class="ui big image" src="<?php echo base_url("assets/images/qrcode.png")?>">
		        <div class="content">
		          ORDER
		          <div class="sub header">Retrieve order via QR Code</div>
		        </div>  
		    </h1>

		    <a href="<?php echo site_url()?>/CLogin/viewPos?>">
		    	<h4 style="color: gray;"><i class="left arrow grey icon"></i>BACK TO HOME</h4>
		    </a>

		    <div class="ui hidden divider"></div>

		    <div class="ui info visible message">
				<p>To retrieve guest order, place QR Code from mobile in front of the camera (web-cam).</p>
			</div>
			<div class="ui warning visible message">
				<p>If the scanner does not appear, or if the scanner failed to retrieve the order, enter the <strong>Reference Number</strong> below.</p>
			</div>

		    <center>
		    	<video id="qrcam" class="ui fluid item vid"></video> 
		    	<input type="hidden" name="qr" id="qr" value="<?php echo $qr ?>">
		    	<div class="ui hidden divider"></div>
				<div class="ui form">
				    <div class="inline field">
				        <label for="ref">Reference No.</label>
				        <div class="ui action input">
							<input type="number" placeholder="Enter Reference Number" id="ref" name="ref">
							<button class="ui button" id="ok">Submit</button>
				        </div>
				    </div>
				</div>
		    </center>
		
		</div>
		<div class="column"></div>
	</div>
	<div class="row"></div>
	<div class="row"></div>
</div> <!-- closing grid -->

</body>
</html>


<script type="text/javascript"> 
	var qr = new Instascan.Scanner({
		video: $('#qrcam')[0]
	});
	Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          qr.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });


	
	qr.addListener('scan',function(data){
		
		dataSet = "qr="+data;
		$.ajax({
			type: "POST",
			url: '<?php echo site_url()?>/COrdered/displayOrderFromQR',
			data: dataSet,
			cache: false,
			success: function(result){
				if(result){
					$('body').html(result);
					qr.stop($('#qrcam')[0]);
					
				 }else{
					alert("Error");
				 }                 
			},
			error: function(jqXHR, errorThrown){
				console.log(errorThrown);
			}
		});
	});
	

	$('#ok').on('click', function() {
	  var qr = $("#ref").val();
	  dataSet = "qr="+qr;
	  $.ajax({
		type: "POST",
		url: '<?php echo site_url()?>/COrdered/displayOrderFromQR',
		data: dataSet,
		cache: false,
		success: function(result){
			if(result){
				$('body').html(result);
				qr.stop($('#qrcam')[0]);
			 }else{
				alert("Error");
			 }                 
		},
		error: function(jqXHR, errorThrown){
			console.log(errorThrown);
			console.log(dataSet);
		}
	  });
});
</script>	
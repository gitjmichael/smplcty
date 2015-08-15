<script src="<?php echo base_url(); ?>resources/js/jQuery/jQuery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/plugin/hpneo-gmaps-317cd91/gmaps.js"></script>

<script>
	$(function(){

	// 	var data = {
	// 		asdad : asdad
	// 	};

	// 	$.post("api/shop", {
	// 		oper : 'save',
	// 		data : JSON.stringify(data)
	// 	}, function(response){
	// 		if(typeof response['data'] != 'undefined'){

	// 		}
	// 	});

		if($('#google-map').length > 0){
			new GMaps({
			  div: '#google-map',
				  lat: -12.043333,
				  lng: -77.028333
				});
		}
		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	});
</script>
</html>

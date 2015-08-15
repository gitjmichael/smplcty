<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('fragments/head.php'); ?>
<body>
<!-- START CONTENT HERE -->
	<div class="container-fluid">
		<div class="space-big"></div>
		<div class="space-big"></div>
		<div class="space-big"></div>
		
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">
					Smplcty
				</h2>
			</div>
		</div>
		<div class="space-big"></div>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="input-group">
						      <input type="text" class="form-control" placeholder="Search for...">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button">Search</button>
						      </span>
						    </div><!-- /input -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="space-gap"></div>
		<h3>Suggestions</h3>
		<div class="row">
			<div class="col-sm-4">
				<h4>Food</h4>
				<div class="row">
					<div class="col-sm-12">
						<div class="list-group" id="promo-container">
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<h4>Entertainment</h4>
				<div class="row">
					<div class="col-sm-12">
						<div class="list-group" id="promo-container">
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4">
				<h4>Entertainment</h4>
				<div class="row">
					<div class="col-sm-12">
						<div class="list-group" id="promo-container">
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="resources/js/jQuery/jQuery-2.1.4.min.js"></script>
<script>
	// $(function(){
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
	// })
</script>
</html>

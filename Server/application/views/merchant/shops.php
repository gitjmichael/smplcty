<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('fragments/head.php'); ?>

<body>
<!-- START CONTENT HERE -->
	<?php $this->load->view('fragments/nav-merchant.php'); ?>

	<div class="container-fluid">
		<div class="space-gap"></div>

		<div class="row">
	    	<div class="col-sm-6">
	    		<div role="tabpanel">

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs smplcty-tab" role="tablist" id="myTab">
				    <li role="presentation" class="col-sm-6 active"><a href="#map" aria-controls="map" role="tab" data-toggle="tab"><b>Map</b></a></li>
				    <li role="presentation" class="col-sm-6"><a href="#detail" aria-controls="detail" role="tab" data-toggle="tab"><b>Detail</b></a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane" id="detail">
				    	<div class="space-gap"></div>
				    	<div class="col-sm-12">
							<h4>List group item heading</h4>

							<p class="address text-italic">
								<b>Address</b>: <br> Alameda Chabuca Granda <br>Jiron Santa, Lima 15001, <br>Peru (01) 3151300
							</p>
							<p><b>Description</b></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales. Phasellus aliquet venenatis convallis. Phasellus nec urna purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales. Phasellus aliquet venenatis convallis. Phasellus nec urna purus.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales. Phasellus aliquet venenatis convallis. Phasellus nec urna purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales. Phasellus aliquet venenatis convallis. Phasellus nec urna purus.</p>

							<div class="space-gap"></div>

							<p><b>Promo Detail</b></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales.</p>

							<p><b>Promo Detail</b></p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales.</p>
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane active" id="map">
				    	<div class="space-gap"></div>
				    	<div id="google-map" class="well"></div>
				    </div>
				  </div>
				</div>
	    	</div>
	    	<div class="col-sm-6">
	    		<div class="row">
	    			<div class="col-sm-12">
	    				<div class="input-group">
					      <input type="text" class="form-control" placeholder="Search for...">
					      <span class="input-group-btn">
					        <button class="btn btn-primary" type="button">Search</button>
					      </span>
					    </div><!-- /input -->
	    			</div>
	    		</div>
	    		<div class="space-gap"></div>
	    		<div class="list-group" id="merchant-shops">
		    		<div class="list-group-item-container">
						<a href="<?php echo base_url(); ?>merchant/shops/1" class="list-group-item">
							<h4 class="list-group-item-heading">Store 1</h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
						</a>
					</div>
		    		<div class="list-group-item-container">
						<a href="<?php echo base_url(); ?>merchant/shops/2" class="list-group-item">
							<h4 class="list-group-item-heading">Store 2</h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
						</a>
					</div>
		    		<div class="list-group-item-container">
						<a href="<?php echo base_url(); ?>merchant/shops/2" class="list-group-item">
							<h4 class="list-group-item-heading">Store 3</h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
						</a>
					</div>
		    		<div class="list-group-item-container">
						<a href="<?php echo base_url(); ?>merchant/shops/2" class="list-group-item">
							<h4 class="list-group-item-heading">Store 4</h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
						</a>
					</div>
					
				</div>
	    	</div>
		</div>
	</div>
</body>

<?php $this->load->view('fragments/foot.php'); ?>
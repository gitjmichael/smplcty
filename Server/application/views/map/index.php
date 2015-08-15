<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('fragments/head.php'); ?>

<body>
<!-- START CONTENT HERE -->
	<?php $this->load->view('fragments/nav.php'); ?>

	<div class="container-fluid">

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
		<div class="row">
			<div role="tabpanel">

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs smplcty-tab" role="tablist" id="myTab">
			    <li role="presentation" class="col-sm-6 active"><a href="#map" aria-controls="map" role="tab" data-toggle="tab"><b>Map</b></a></li>
			    <li role="presentation" class="col-sm-6"><a href="#promo" aria-controls="promo" role="tab" data-toggle="tab"><b>Promo</b></a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane" id="promo">
			    	<div class="space-gap"></div>
			    	<div class="list-group" id="promo-container">
			    		<div class="list-group-item-container">
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
						</div>
			    		<div class="list-group-item-container">
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
						</div>
			    		<div class="list-group-item-container">
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
						</div>
			    		<div class="list-group-item-container">
							<a href="<?php echo base_url(); ?>promo" class="list-group-item">
								<h4 class="list-group-item-heading">List group item heading</h4>
								<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non odio eu nunc egestas sodales..</p>
							</a>
						</div>
						
					</div>
			    </div>
			    <div role="tabpanel" class="tab-pane active" id="map">
			    	<div class="space-gap"></div>
			    	<div id="google-map" class="well"></div>
			    </div>
			  </div>

			</div>
		</div>
	</div>
</body>

<?php $this->load->view('fragments/foot.php'); ?>
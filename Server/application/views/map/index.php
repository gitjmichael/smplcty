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
			        <button class="btn btn-default" type="button">Find</button>
			      </span>
			    </div><!-- /input -->
			</div>
		</div>
		<div class="space-gap"></div>
		<div class="row">
			<div class="col-md-12">
				<div id="google-map" class="well"></div>
			</div>
		</div>
	</div>
</body>

<?php $this->load->view('fragments/foot.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('fragments/head.php'); ?>

<body>
<!-- START CONTENT HERE -->
	<?php $this->load->view('fragments/nav.php'); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div id="google-map" class="well"></div>
			</div>
		</div>
	</div>
</body>

<?php $this->load->view('fragments/foot.php'); ?>
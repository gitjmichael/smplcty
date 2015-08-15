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
				<div id="promo" class="well">
				    <h4>Alternate elements</h4>
				    <p>Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
				</div>
			</div>
		</div>
	</div>
</body>

<?php $this->load->view('fragments/foot.php'); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('fragments/head.php'); ?>

<body>
<!-- START CONTENT HERE -->
	<?php $this->load->view('fragments/nav.php'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<div id="google-map" class="well"></div>
		</div>
		<div class="col-sm-6">
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
</div>
</body>

<?php $this->load->view('fragments/foot.php'); ?>
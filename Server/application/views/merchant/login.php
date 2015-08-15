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
						<div class="col-sm-4 col-sm-offset-4">
							<div class="form-horizontal">
								<div class="form-group">
									<label for="" class="control-label">Email</label>
									<div class="control">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Pasword</label>
									<div class="control">
										<input type="password" class="form-control" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="control text-right">
										<button class="btn btn-primary">Login</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="space-gap"></div>
	</div>
</body>
<script src="resources/js/jQuery/jQuery-2.1.4.min.js"></script>
</html>


<!DOCTYPE html>
<html>

<head>
  <title>Smpclty</title>
  <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources/css/main.css">
</head>
<body>
<!-- START CONTENT HERE -->
	<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button> <a class="navbar-brand" href="#">Smplcty</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="">
						<a href="#">Home</a>
					</li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control input-sm" />
					</div> 
					<button type="submit" class="btn btn-default btn-sm">
						Search
					</button>
				</form>
			</div>
			
		</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div id="google-map" class="well"></div>
			</div>
		</div>
	</div>
</body>
<script src="resources/js/jQuery/jQuery-2.1.4.min.js"></script>
<script src="resources/js/jQuery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="resources/plugin/hpneo-gmaps-317cd91/gmaps.js"></script>

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

	new GMaps({
	  div: '#google-map',
		  lat: -12.043333,
		  lng: -77.028333
		});
	})
</script>
</html>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tugas Awal</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Andy Putra Wijaya</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
						<li><a href="<?php echo site_url()?>/about">About</a></li>
						<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
						<li><a href="<?php echo site_url()?>/news">News</a></li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div>
		</nav>	
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="table-responsive">
			<h1>Biodata Query Biasa Array</h1>
			<table class="table table-hover">
				<tbody>
					<?php foreach ($biodata_array as $key) { ?>
					<tr>
						<td><?php echo $key['nama'] ?></td>
					</tr>
					<tr>
						<td><?php echo $key['nim'] ?></td>
					</tr>
					<tr>
						<td><?php echo $key['alamat'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>	
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="table-responsive">
			<h1>Biodata Query Biasa Object</h1>
			<table class="table table-hover">
				<tbody>
					<?php foreach ($biodata_object as $key) { ?>
					<tr>
						<td><?php echo $key->nama ?></td>
					</tr>
					<tr>
						<td><?php echo $key->nim ?></td>
					</tr>
					<tr>
						<td><?php echo $key->alamat ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>	
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="table-responsive">
			<h1>Biodata Query Builder Array</h1>
			<table class="table table-hover">
				<tbody>
					<?php foreach ($biodata_builder_array as $key) { ?>
					<tr>
						<td><?php echo $key['nama'] ?></td>
					</tr>
					<tr>
						<td><?php echo $key['nim'] ?></td>
					</tr>
					<tr>
						<td><?php echo $key['alamat'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		</div>	
		
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="table-responsive">
			<h1>Biodata Query Builder Object</h1>
			<table class="table table-hover">
				<tbody>
					<?php foreach ($biodata_builder_object as $key) { ?>
					<tr>
						<td><?php echo $key->nama ?></td>
					</tr>
					<tr>
						<td><?php echo $key->nim ?></td>
					</tr>
					<tr>
						<td><?php echo $key->alamat ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	
		</div>
		</div>
		</div>
	</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
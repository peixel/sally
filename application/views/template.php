<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>template</title>
		<meta name="description" content="">
		<meta name="author" content="GUITARRERO">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">


 		<link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">


		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<div class="container-fluid">
			<header>
				<h1>template</h1>
			</header>
			<div >
			<?=$principal?>
			</div>

			<footer>
				<p>
					&copy; Copyright  by GUITARRERO
				</p>
			</footer>
		</div>
		
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
	</body>
</html>

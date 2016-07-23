	<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>SALLY | Sistema de Ventas</title>
        <meta name="description" content="">
        <meta name="author" content="GUITARRERO">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">


        <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url()?>css/style.css" rel="stylesheet">
        
        <script src="<?=base_url()?>js/jquery.min.js"></script>
        <script src="<?=base_url()?>js/photobooth.js"></script>


    
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        
        <script>
        $(document).ready(function(){
            $( "input[name=price_out]" ).keyup(function() {
                
                var pin = parseFloat($("input[name=price_in]" ).val());
                var pout = parseFloat($( "input[name=price_out]" ).val());
                var res = 0;
                //alert(res);
                res= pout - pin;
                res = res*100/pin;
                //alert(res);
                
                //alert($( "input[name=price_in]" ).val());
              $('#margen').text(res);
            });
         });
        </script>

        
    </head>

    <body>
        <div class="container-fluid">
            <ul class="nav nav-pills">
              <li role="presentation" class="active"><a href="<?=base_url()?>products/view">Home</a></li>
              <li role="presentation"><a href="<?=base_url()?>product">Products</a></li>
              <li role="presentation"><a href="<?=base_url()?>label">Etiquetas</a></li>
              <li role="presentation"><a href="<?=base_url()?>product/inventario">inventario</a></li>
              <li role="presentation"><a href="#">Salir</a></li>
            </ul>
        </div>
        
	<div class="container-fluid">
		<a href="<?=base_url()?>"><-</a>
			<div >
			<?=$principal?>
			</div>

    </div>
            
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    </body>
</html>
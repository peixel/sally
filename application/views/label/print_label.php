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


        <link href="<?=base_url()?>css/style.css" rel="stylesheet">
        
   
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        
        
    </head>

    <body>


<div class="container">
    
        <div class="row">
        <?
        
        $label=count($labels)/2;
        $rowi=0;
        //echo $label;
       for ($i=0; $i <= $label-1 ; $i++) {
           $a=$i*2;
           $b=$a+1;
           
            ?>
          <div class="colx">
              &nbsp;<br>
              <img src="<?=base_url()?>qr/etiquetas.png" width="120">
              <img src="<?=base_url()?>qr/<?=$labels[$a]?>.png" width="110">
              <div class="caption" align="center">
                <h4><?=$labels[$a]?></h4>
                <h3><?=$labels[$b]?>&nbsp;Bs.</h3>
                <h6>Av. Aniceto Arce #380 / 74320613 / fb/pikibabystore</h6>
              </div>
          </div>
    <?
       
        }//end for
    ?>
</div>
</div>
</body>
</html>

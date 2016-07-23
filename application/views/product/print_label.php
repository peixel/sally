<?php

		echo $code."<br>";
		echo $filename."<br>";
        QRcode::png($code, $filename, $errorCorrectionLevel, $matrixPointSize, 2);   
        echo '<img src="'.base_url()."temp/".basename($filename).'" /><hr/>';  
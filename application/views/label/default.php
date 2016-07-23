<form action="<?=base_url()?>label/show" method="post">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>&nbsp;</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Codigo</th>
            <th>P. Compra</th>
            <th>P. Venta</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?
         $i=1;
        foreach ($products as $product) {
            
           
        
        ?>
        <tr>
            <td><?=$product->id?></td>
            <td><input type="checkbox" name="prod<?=$i?>" value="<?=$product->id?>" checked></td>
            <td><?=$product->name?></td>
            <td><?=$product->description?></td>
            <td><?=$product->code?></td>
            <td><?=$product->price_in?></td>
            <td><?=$product->price_out?></td>
            <td><input type="text" name="qt_label<?=$i?>" value="<?=$product->qt?>"></td>
        </tr>
        <?
        $i=$i+1;
        }//end foreach
        ?>
    </tbody>
</table>
<input type="hidden" name="cont" value="<?=$i-1?>"/>
<input type="submit" class="btn btn-primary" value="MOSTRAR"/>
</form>

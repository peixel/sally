<p>
    <a href="<?=base_url()?>product/">
        <input type="button" class="btn-info" value="Nuevo Producto"/>
    </a>
</p>
<form method="post" action="<?=base_url()?>product/update_list">
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Codigo</th>
            <th>qt</th>
            <th>P. Compra</th>
            <th>P. Rebaja</th>
            <th>P. Venta</th>
        </tr>
        </thead>
        <tbody>
        <?
        $i=1;
        foreach ($products as $product) {
            
        
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$product->name?></td>
            <td><?=$product->description?></td>
            <td><?=$product->code?></td>
            <td><?=$product->qt?></td>
            <td><?=$product->price_in?></td>
            <td><?=$product->price_low?></td>
            <td><?=$product->price_out?></td>
        </tr>
        <?
        $i=$i+1;
        }//end foreach
        ?>
    </tbody>
</table>
<input type="hidden" value="<?=$i-1?>" name="iqt" />
<input type="submit" value="actualizar" />

</form>
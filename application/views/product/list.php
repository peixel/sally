<p>
    <a href="<?=base_url()?>product/">
        <input type="button" class="btn-info" value="Nuevo Producto"/>
    </a>
</p>
<form method="post" action="<?=base_url()?>product/update_list">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Codigo</th>
            <th>qt</th>
            <th>P. Compra</th>
            <th>P. Rebaja</th>
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
            <td><?=$product->name?></td>
            <td><?=$product->description?></td>
            <td><?=$product->code?></td>
            <td><input name="qt<?=$i?>" type="text" value="<?=$product->qt?>" size="4"></td>
            <td><input name="pin<?=$i?>" type="text" value="<?=$product->price_in?>" size="4"></td>
            <td><input name="plow<?=$i?>" type="text" value="<?=$product->price_low?>" size="4"></td>
            <td><input name="pout<?=$i?>" type="text" value="<?=$product->price_out?>" size="4"></td>
            <td><a href="#">Add</a></td>
            <td><a href="<?=base_url()?>product/del/<?=$product->id?>">Del</a></td>
            <input type="hidden" name="id<?=$i?>" value="<?=$product->id?>" />
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

<form method="post" action="<?=base_url()?>product/save">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre del Producto" name="name_product">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <input type="text" class="form-control" id="description" placeholder="Descripcion" name="description">
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Precio de Compra</label>
    <input type="text" class="form-control" id="price_in" placeholder="Precio de Compra" name="price_in">
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Precio de Rebaja</label>
    <input type="text" class="form-control" id="price_low" placeholder="Precio Minimo" name="price_low">
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Precio de Venta</label>
    <input type="text" class="form-control" id="price_out" placeholder="Precio de Venta" name="price_out">
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Cantidad</label>
    <input type="text" class="form-control" id="qt" placeholder="Cantidad" name="qt">
  </div>
 
 
  <button type="submit" class="btn btn-default">Guardar</button>
</form>

    <h1>
       <span id="margen" class="label label-warning"> %</span>
    </h1>

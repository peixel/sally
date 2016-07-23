        <form method="post" action="<?=base_url()?>carrito/add">
        <div class="container-fluid">

        <div class="row">
                    <div class="col-md-12">
        
                        <div class="boxWrapper">
                        <script>( '#example' ).data( "photobooth" ).resize( 400, 400 );</script>
                        <div id="example"></div>
                        </div>
                    </div>
                     <div class="col-md-12">
                               <button type="button" class="btn btn-primary" id="button">Scan</button>
                    </div>
                     <div class="col-md-12">
                         <div class="boxWrapper auto">
                                    <div id="hiddenImg"></div>
                                    
                                    <input type="text"  name="qrForm" id="qrForm" value=""/>
                                    
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="resultado">aqui</div>
                    </div>
                 </div>
            </div>
        <div class="container-fluid">
            <div class="row">
                  <div class="form-group">
                    <label for="exampleInputEmail1">CODE:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ingrese el codigo" name="code">
                  </div>
                <button type="submit" class="btn btn-default">Procesar pedido</button>
            </div>
        </div>
        </form>
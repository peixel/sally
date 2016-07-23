<form method="post" action="<?=base_url()?>home/control">
  <div class="form-group">
    <label for="exampleInputEmail1">Login:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" name="login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="pass" name="pass">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
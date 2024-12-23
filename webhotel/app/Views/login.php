
<h2 style="font-family: sans-serif; background-color: #f0f0f0;font-weight: bold;">LOGIN</h2>
<form action="<?=base_url('/gudang/aksi_login')?>" method="POST">
  <table>
    <tr>
      <td><label for="email">Email:</label></td>
      <td><input type="email" class="form-control" id="email" placeholder="Enter email" name="email"></td>
    </tr>
    <tr>
      <td><label for="pwd">Password:</label></td>
      <td><input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"></td>
    </tr>
    <tr>
      <td></td>
      <label class="form-check-label">
        <td><input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" class="btn btn-danger">Submit</button></td>
      </tr>
    </table>
  </form>

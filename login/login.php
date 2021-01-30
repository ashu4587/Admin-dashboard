<div class="login-box">
<div class="register-logo"  style="margin-bottom:15px;" >
    <a  href="<?php echo URL;?>frontpage/frontpage-crud.php"><b>BMW &nbsp;</b>BIKES</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg">Sign in to start your session</h4>

    <center><p style="color:red;"> <?php echo $msg;?></p></center>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name = "username" class="form-control" placeholder="Email or Username" value="<?php echo(!empty($remeber)?$username:'');?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <center><p style="color:red;"> <?php echo $msg1;?></p></center>

      <div class="form-group has-feedback">
        <input type="password" name= "password" class="form-control" placeholder="Password" value="<?php echo(!empty($remeber)?$password:'');?>" >
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <center><p style="color:red;"> <?php echo $msg2;?></p></center>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox">
            <label>
              <input type="checkbox" name = "checked" value ="remeber me" class="form-check-input">Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name= "login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="<?php echo URL;?>/Register/crud-register.php" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

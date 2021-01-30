<style>
  .form-group ::placeholder {
      color:<?php echo $color; ?>;
  }

  #pimg{
    color: <?php echo $color1 ;?>
  }

</style>

<div class="register-box">
  <div class="register-logo"  style="margin-bottom:-17px;" >
    <a  href="<?php echo URL;?>frontpage/frontpage-crud.php"><b>BMW &nbsp;</b>BIKES</a>
  </div>
  <div class="register-box-body">
    <center><h3><b>Register a new membership</b></h3></center><br>
     <center><b><?php echo $msgexist1;?><i class="<?php echo $warn; ?>" style=<?php echo $style; ?>></i></b></center>
    <center><p style="color:<?php echo $smallstyle?>"><small><?php echo $msgexist; echo  $msgexist2 ;?></small></p></center>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="<?php echo $username_empty;?>" value="<?php echo(!empty($username) ? $username : '');?>">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="firstname" placeholder="<?php echo $fname ;?>" value="<?php echo(!empty($firstname) ? $firstname : '');?>">
        <span class="fa fa-pencil form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="lastname" placeholder="<?php echo $lname ;?>" value="<?php echo(!empty($lastname) ? $lastname : '');?>">
        <span class="fa fa-pencil form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="phone" class="form-control"  name="phone" placeholder="<?php echo $phn ;?>" value="<?php echo(!empty($phone) ? $phone : '');?>">
        <span class="fa fa-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="<?php echo $email1; ?>" value="<?php echo(!empty($email) ? $email : '');?>">
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="country" placeholder="<?php echo $cntry; ?>" value="<?php echo(!empty($country) ? $country : '');?>">
        <span class="fa fa-flag form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="state" placeholder="<?php echo $st; ?>" value="<?php echo(!empty($state) ? $state : '');?>">
        <span class="fa fa-city form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="city" placeholder="<?php echo $ct; ?>" value="<?php echo(!empty($city) ? $city : '');?>">
        <span class="fa fa-building-o form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <textarea class="form-control" name="address" placeholder="<?php echo $add; ?>" rows="3"><?php echo(!empty($address) ? $address : '');?></textarea>
        <span class="fa fa-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="number" class="form-control" name="adhaar_card" placeholder="<?php echo $acard; ?>" value="<?php echo(!empty($adhaar_card) ? $adhaar_card: '');?>">
        <span class="fa fa-file form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="<?php echo $pwrd; ?>" value="<?php echo(!empty($password) ? $password : '');?>">
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="cpassword" placeholder="<?php echo $cpwrd; ?>" value="<?php echo(!empty($cpassword) ? $cpassword : '');?>">
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <label id="pimg"><p><?php echo $profileimg; ?></p></label>
      <input type="file" name="profile_image" multiple >
        <span class="fa fa-upload form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="register">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="<?php echo URL; ?>login/crud-login.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>


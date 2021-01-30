<style>
  .form-group ::placeholder {
      color:<?php echo $color; ?>;
  }

  #engine{
    color: <?php echo $colorsel1 ;?>
  }

  #engine_type {
  color:<?php echo $colorsel2; ?>;
  }

  #image{
    color:<?php echo $color_img; ?>
  }

  #ptype{
    color: <?php echo $color_p; ?>
  }

  option:not(:first-of-type) {
    color: black;
  }

  #date{
    color: <?php echo $dcolor ;?>
  }
</style>
<div class="posts" style="height:850px; margin-top:-50px;">
<div class="login-box">
<div class="register-logo"  style="margin-left:70px;" >
    <a  href="<?php echo URL;?>frontpage/frontpage-crud.php"><b>BMW &nbsp;</b>BIKES</a>
  </div>
  <!-- /.login-logo -->
  <center><p style="margin-left:40px;"><?php echo $msg; echo $msgexist;?><i class="<?php echo $warn; ?>" style=<?php echo $style; ?>></i></p></center>
  <div class="login-box-body" style="width: 700px; margin-left: -120px;" >
    <h4 class="login-box-msg">Add Your posts here</h4>

    <form  method="post" action="" role="form" enctype="multipart/form-data">
    <div class="messages"></div>
    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Bike*</label>
                    <input id="form_name" type="text" name="bike" class="form-control" placeholder="<?php echo $bike_empty; ?>" value="<?php echo(!empty($bike) ? $bike : '');?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Model no *</label>
                    <input id="form_lastname" type="text" name="model_no" class="form-control" placeholder="<?php echo $model_no_empty; ?>" value="<?php echo(!empty($model_no) ? $model_no : '');?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">Price *</label>
                    <input id="price" type="text" name="price" class="form-control" placeholder="<?php echo $price_empty; ?>" value="<?php echo(!empty($price) ? $price : '');?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Engine (in cc)*</label>
                    <select id="engine" name="engine" class="form-control">
                        <option value=""><?php echo $Engine_cc; ?></option>
                        <?php foreach($Engine_power as $cc){ ?>
                        <option value="<?php echo $cc; ?>"<?php echo(!empty($engine== $cc) ? 'selected="selected"' : '');?>><?php echo $cc; ?></option>
                        <?php }?>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="engine_type">Engine type*</label>
                    <select id="engine_type" name="engine_type" class="form-control">
                        <option value=""><?php echo $etype; ?></option>
                        <?php foreach($Bstype as $BS){ ?>
                        <option value="<?php echo $BS; ?>"<?php echo(!empty($engine_type== $BS) ? 'selected="selected"' : '');?> ><?php echo $BS; ?></option>
                       <?php } ?>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date1" id="date"><?php echo $myear; ?></label>
                    <input id="date1" type="date" name="model_year" class="form-control" placeholder="Model year *" value="<?php echo(!empty($model_year) ? $model_year : '');?>">
                    <div class="help-block with-errors"></div>
                </div>
             </div>
             <div class="col-md-6">
              <div class="form-check">
                <b id="ptype"><?php echo $ptype; ?> &nbsp;</b>
                <label class="form-check-label" for="kick_start">
                  Kick-start
                </label>
                <input class="form-check-input" type="radio" name="Power_type" id="kick_start" value="kick start" <?php echo(!empty($power_type == 'kick start') ? 'checked="checked"' : '');?>>
                <label class="form-check-label" for="self_start">
                  Self-start
                </label>
                <input class="form-check-input" type="radio" name="Power_type" id="self_start" value="self start" <?php echo(!empty($power_type == 'self start') ? 'checked="checked"' : '');?>>
                
              </div>
             </div>
             <div class="col-md-6">
                <div class="form-check">
                  <b id="image"><?php echo $bikimg; ?>&nbsp;</b>
                  <input type="file" name="bike_image" multiple value="<?php echo(!empty($bikeimage) ? $bikeimage : '');?>"><br>
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Discription *</label>
                    <textarea id="form_message" name="discription" class="form-control" placeholder="<?php echo $discr; ?>" rows= 4><?php echo(!empty($discription) ? $discription : '');?></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" name= "post" value="">SUBMIT</button>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required. Contact form template by
                    <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank">Bootstrapious</a>.</p>
            </div>
        </div> -->
    </div>

</form>

  </div>
  
  <!-- /.login-box-body -->
</div>
</div>
<!-- /.login-box -->
<!-- <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script> -->

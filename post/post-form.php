<div class="posts" style="height:850px; margin-top:-50px;">
<div class="login-box">
<div class="register-logo"  style="margin-left:70px;" >
    <a  href="<?php echo URL;?>frontpage/frontpage-crud.php"><b>BMW &nbsp;</b>BIKES</a>
  </div>
  <!-- /.login-logo -->
  <center><p style="margin-left:40px;"><?php echo $msg;?></p></center>
  <div class="login-box-body" style="width: 700px; margin-left: -120px;" >
    <h4 class="login-box-msg">Add Your posts here</h4>

    <form  method="post" action="" role="form" enctype="multipart/form-data">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Bike*</label>
                    <input id="form_name" type="text" name="bike" class="form-control" placeholder="Enter bike name *">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Model no *</label>
                    <input id="form_lastname" type="text" name="model_no" class="form-control" placeholder="Enter model no. *">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">Price *</label>
                    <input id="price" type="text" name="price" class="form-control" placeholder="Price *">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Engine (in cc)*</label>
                    <select id="form_need" name="engine" class="form-control">
                        <option value="">POWER</option>
                        <option value="300cc">300cc</option>
                        <option value="350cc">350cc</option>
                        <option value="400cc">400cc</option>
                        <option value="450cc">450cc</option>
                        <option value="480cc">480cc</option>
                        <option value="520cc">450cc</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="engine_type">Engine type*</label>
                    <select id="engine_type" name="engine_type" class="form-control">
                        <option value=""> Engine type</option>
                        <option value="BS4">BS4</option>
                        <option value="BS5">BS5</option>
                        <option value="BS6">BS6</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Model year *</label>
                    <input id="form_email" type="text" name="model_year" class="form-control" placeholder="Model year *">
                    <div class="help-block with-errors"></div>
                </div>
             </div>
             <div class="col-md-6">
              <div class="form-check">
                <b>Power type: &nbsp;</b>
                <input class="form-check-input" type="radio" name="Power_type" id="kick_start" value="kick start">
                <label class="form-check-label" for="kick_start">
                  Kick-start
                </label>
                <input class="form-check-input" type="radio" name="Power_type" id="self_start" value="self start">
                <label class="form-check-label" for="self_start">
                  Self-start
                </label>
              </div>
             </div>
             <div class="col-md-6">
                <div class="form-check">
                  <b>Add image of bike :&nbsp;</b>
                  <input type="file" name="bike_image" multiple><br>
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Discription *</label>
                    <textarea id="form_message" name="discription" class="form-control" placeholder="Add more details *" rows= 4></textarea>
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

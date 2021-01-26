
<div class="posts" style="height:850px; margin-top:-50px;">

<div class="login-box">
<div class="register-logo"  style="margin-left:70px;" >
    <a  href="<?php echo URL;?>frontpage/frontpage-crud.php"><b>BMW &nbsp;</b>BIKES</a>
  </div>
  <!-- /.login-logo -->
  
  <div class="login-box-body" style="width: 700px; margin-left: -120px;" >
    <h4 class="login-box-msg">Add Your posts here</h4>

    <form id="contact-form" method="post" action="contact.php" role="form" enctype="multipart/form-data">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Bike*</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter bike name *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Model no *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Enter model no. *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Price *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Engine (in cc)*</label>
                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                        <option value="">POWER</option>
                        <option value="Request quotation">300cc</option>
                        <option value="Request order status">350cc</option>
                        <option value="Request copy of an invoice">400cc</option>
                        <option value="Request order status">450cc</option>
                        <option value="Request copy of an invoice">480cc</option>
                        <option value="Request order status">450cc</option>
                        <option value="Request copy of an invoice">502cc</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Power type*</label>
                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                        <option value="">Power type</option>
                        <option value="Request quotation">kick start</option>
                        <option value="Request order status">Self start</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Model year *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
             </div>
             <div class="col-md-6">
                <div class="form-check">
                  <b>SELECT POWER TYPE :&nbsp;</b>
                  <label class="form-check-label" for="exampleCheck1"><small>Kick-start</small></label>
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1"><small>self-start</small></label>
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                </div>
             </div>
             <div class="col-md-6">
                <div class="form-check">
                  <b>Add image of bike :&nbsp;</b>
                  <label class="form-check-label" for="exampleCheck1"><small>Kick-start</small></label>
                  <input type="file" name="name" multiple><br>
                </div>
             </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Discription *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required. Contact form template by
                    <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank">Bootstrapious</a>.</p>
            </div>
        </div>
    </div>

</form>

  </div>
  
  <!-- /.login-box-body -->
</div>
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

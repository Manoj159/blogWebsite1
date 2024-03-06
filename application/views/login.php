<?php include('header.php'); ?>
<div class="mt-5 container">
  <div class="card">
    <div class="card-header">Register</div>
    <div class="card-body">
      <?php echo form_open('login/loginvalidate'); ?>
      <?php echo form_input(['class'=>'form-control','placeholder'=>'enter your phone number','name'=>'mnumber']); ?><br>
      <?php echo form_password(['class'=>'form-control','placeholder'=>'enter password','name'=>'pwd']); ?><br>
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'submit']); ?>
      <h6>already have an account <a href="<?php echo base_url('Welcome/signup'); ?>">click here </a> </h6>
      </div>
      <?php echo validation_errors(); ?>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
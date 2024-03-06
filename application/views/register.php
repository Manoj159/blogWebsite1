<?php include('header.php'); ?>

<div class="mt-5 container">
  <div class="card">
    <div class="card-header">Register</div>
    <div class="card-body">
      <?php echo form_open('login/validate'); ?>
      <?php echo form_input(['class'=>'form-control','placeholder'=>'enter your name','name'=>'fname','value'=>set_value('fname')]); ?><br>
      <div>
      <?php echo form_input(['class'=>'form-control','placeholder'=>'enter your phone number','name'=>'mnumber','value'=>set_value('mnumber')]); ?><br>
     
      <?php echo form_input(['class'=>'form-control','placeholder'=>'enter otp','name'=>'otp']); ?><br>
      <?php echo form_password(['class'=>'form-control','placeholder'=>'enter password','name'=>'pwd','value'=>set_value('pwd')]); ?><br>
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'submit']); ?>
      <h6>already have an account <a href="<?php echo base_url('Welcome/login'); ?>">click here </a> </h6>
      </div>
      <?php echo validation_errors(); ?>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
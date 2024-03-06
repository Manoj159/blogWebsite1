<?php include 'header.php'; ?>

<div class="mt-5 container">
  <div class="card">
    <div class="card-header" style="background-color: black; color: white;">ADD PLAN</div>
    <div class="card-body">
      <?php echo form_open_multipart('home/newPlan'); ?> <!-- Changed form_open to form_open_multipart for file upload -->
      <?php echo form_input(['class'=>'form-control','placeholder'=>'PLAN NAME','name'=>'plan_name','value'=>set_value('plan_name')]); ?><br>
      <?php echo form_input(['class'=>'form-control','placeholder'=>'PLAN PRICE','name'=>'plan_price','value'=>set_value('plan_price')]); ?><br>
      <?php echo form_input(['class'=>'form-control','placeholder'=>'PLAN DURATION','name'=>'plan_duration','value'=>set_value('plan_duration')]); ?><br>
      <?php echo form_upload(['class'=>'form-control','name'=>'image']) ?> <!-- Changed form_input to form_upload for file input -->
      <br>
     
      <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'submit']); ?>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

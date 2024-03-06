<?php include 'header.php'; ?>

<div class="mt-5 container">
  <div class="card">
    <div class="card-header bg-dark text-white">ADD ARTICLE</div>
    <div class="card-body">
      <?php echo form_open('home/validate'); ?>
        <div class="form-group">
          <?php echo form_label('Article Title', 'a_tittle'); ?>
          <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter article title','name'=>'a_tittle','id'=>'a_tittle','value'=>set_value('a_tittle')]); ?>
          <?php echo form_error('a_tittle', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Article Description', 'a_desc'); ?>
          <?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter article description','name'=>'a_desc','id'=>'a_desc','value'=>set_value('a_desc')]); ?>
          <?php echo form_error('a_desc', '<div class="text-danger">', '</div>'); ?>
        </div>
        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>


<!-- Quill Editor -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
  var quill = new Quill('#a_desc', {
    theme: 'snow',
    modules: {
      toolbar: [
        [{ 'header': [1, 2, false] }],
        ['bold', 'italic', 'underline'],
        ['link', 'image'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['clean']
      ]
    }
  });

  // Update textarea on change
  quill.on('text-change', function() {
    var html = quill.root.innerHTML;
    document.querySelector('textarea[name="a_desc"]').value = html;
  });
</script>

<?php include 'footer.php'; ?>

<?php if(session('success')): ?>
<div class="alert alert-success" role="alert">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<?php if(session('warning')): ?>
<div class="alert alert-warning" role="alert">
  <?php echo e(session('warning')); ?>

</div>
<?php endif; ?>

<?php if(session('message')): ?>
<div class="container">
<?php if(session('error')): ?>
<div class="alert alert-danger alert-dismissable" role="alert">
<?php else: ?>
<div class="alert alert-success alert-dismissable" role="alert">
<?php endif; ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
<?php echo e(session ('message')); ?>

</div>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/partials/alerts.blade.php ENDPATH**/ ?>
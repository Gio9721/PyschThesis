<?php $__env->startSection('content'); ?>
<section>
  
     <header>
         <a href="#" class="logo">Logo</a>
         <ul>
         <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
             <li><a href="<?php echo e(url('viewquestions')); ?>">Questions</a></li>
             <li><a href="<?php echo e(url('viewtime')); ?>" class="active">List of Appointments</a></li>
             <li><a href="<?php echo e(url('myfinishappointments')); ?>">Completed Appointments</a></li>
         </ul>
     </header>
     <form method="POST" action="viewtime" >
      <?php echo csrf_field(); ?>
            <div class="examscard">          
                <div class="card-body"> 
                <table class="table table-striped">
<thead>
<tr>
<center>
<td>ID Number </td>
<td> Name </td>
<td>Date </td>
<td>Time </td>
<td>Action </td>
</center>
</tr>
</thead>
<tbody id="dynamic-row">

<?php $__currentLoopData = $timescheds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<center>
<input type="hidden" class="btn_val_id" value="<?php echo e($t->id); ?>">
<td><input type="text" name="user_idnum" value="<?php echo e($t->user_idnum); ?>" ></td>
<td><input type="text" name="user_fname" value="<?php echo e($t->user_fname); ?> "></td>
<td><input type="text" name="date" value="<?php echo e($t->date); ?> "></td>
<td><input type="text" name="time" value="<?php echo e($t->time); ?> "></td>
<td>
  <?php if($t->status==1): ?>
  <a href="<?php echo e(url ('change-status/'.$t->id)); ?>" class="btn btn-success">Accepted</a>
  <?php else: ?>
  <a href="<?php echo e(url ('change-status/'.$t->id)); ?>" class="btn btn-danger">Pending</a>
  <?php endif; ?>
</form>
  <button type="submit">Done</button>
    </td> 
</center>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/admin/users/councilour/viewtime.blade.php ENDPATH**/ ?>
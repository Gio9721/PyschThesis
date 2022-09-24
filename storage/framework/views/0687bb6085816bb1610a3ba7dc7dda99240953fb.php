<?php $__env->startSection('content'); ?>
<section>
  
     <header>
         <a href="#" class="logo">Logo</a>
         <ul>
         <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
             <li><a href="<?php echo e(url('viewquestions')); ?>">Questions</a></li>
             <li><a href="<?php echo e(url('viewtime')); ?>" >List of Appointments</a></li>
             <li><a href="<?php echo e(url('myfinishappointments')); ?>" class="active">Completed Appointments</a></li>
         </ul>
     </header>
            <div class="examscard">          
                <div class="card-body"> 
                <table class="table table-striped">
                <thead>
<tr>
<td><center>ID Number </center></td>
<td><center> Name </center></td>
<td><center>Date </center></td>
<td><center>Time </center></td>
</tr>
</thead>
<tbody id="dynamic-row">
<?php $__currentLoopData = $donelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><center><p><?php echo e($d->user_idnum); ?> </p></center></td>
<td><center><p><?php echo e($d->user_fname); ?></p></center></td>
<td><center><p><?php echo e($d->date); ?></p></center></td>
<td><center><p><?php echo e($d->time); ?></p></center></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/admin/users/councilour/myfinishappointments.blade.php ENDPATH**/ ?>
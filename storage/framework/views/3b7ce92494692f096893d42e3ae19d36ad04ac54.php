<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="examscard">
                <div class="card-header"><center>Manage User</center>
                <div class="form-group row">
                            Name:  <?php echo e($user->name); ?> <br>
                            Email: <?php echo e($user->email); ?> <br>
                            </div>

                <div class="card-body">
                <form action="<?php echo e(route('admin.users.update', ['user' => $user->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo e(method_field('PUT')); ?>

                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <input type="checkbox" name="roles[]" value="<?php echo e($role->id); ?>"
                       <?php echo e($user->hasAnyRole($role->name)?'checked':''); ?>>
                            <?php echo e($role->name); ?></label>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button type="submit" class="btn btn-primary">Update
                </button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>
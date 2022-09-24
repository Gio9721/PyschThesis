<?php $__env->startSection('content'); ?>
<section>
    <div id="app">
        <header>
            <a href="#" class="logo">Manage Accounts</a>
            <ul>
            <li><a href="<?php echo e(route('admin.users.index')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('adduser')); ?>">Add Account</a></li>
            <li>
                <input type="text" id="search"class="form-control" placeholder="search" style="width: 15rem"/>
            </li>
            </ul>
        </header>
        <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">

            
            <div class="row justify-content-center">
                    <div class="examscard">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <div class="panel-body">
                                    <tr>
                                    <th scope="col">ID Number</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Year Level</th>
                                    
                                    <th scope="col">Edit</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </div>
                                </thead>
                                <tbody id="dynamic-row">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td><?php echo e($user->idnum); ?></td>
                                        <td><?php echo e($user->lname); ?></td>
                                        <td><?php echo e($user->fname); ?></td>
                                        <td><?php echo e($user->course); ?></td>
                                        <td><?php echo e($user->year); ?></td>
                                        
                                        <td>
                                            <a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="float-left">
                                                <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.impersonate', $user->id)); ?>" class="float-left">
                                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button></a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" class="float-left">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>


            <script type="text/javascript">
            $('body').on('keyup', '#search', function(){
                var searchQuest = $(this).val();

                $.ajax({
                        method:'POST',
                        url:"<?php echo e(route ('admin.users.index.action')); ?>",
                        dataType:'json',
                        data: {
                            '_token': '<?php echo e(csrf_token()); ?>',
                            searchQuest: searchQuest,
                        },
                        success:function(res){
                            var tableRow = '';
                            $('#dynamic-row').html('');

                            $.each(res, function(index, value){
                                tableRow = '<tr><td>'+value.idnum+'</td><td>'+value.lname+'</td><td>'+value.fname+'</td><td>'+value.course+'</td><td>'+value.year+'</td><td>'+value.email+'</td><td>'+value.roles+'</td>><td><a href="<?php echo e(route('admin.users.edit', $user->id)); ?>" class="float-left"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a></td><td><a href="<?php echo e(route('admin.impersonate', $user->id)); ?>" class="float-left"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button></a></td><td><form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" class="float-left"><?php echo e(method_field('DELETE')); ?><?php echo csrf_field(); ?><button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></form></td></tr>';
                                $('#dynamic-row').append(tableRow);
                            });
                        }
                    });
                });
            </script>
        </main>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/admin/users/index.blade.php ENDPATH**/ ?>
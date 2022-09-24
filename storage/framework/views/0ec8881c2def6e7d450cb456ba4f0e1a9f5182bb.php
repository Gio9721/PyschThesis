<?php $__env->startSection('content'); ?>
<section>
     <header>
         <a href="#" class="logo">Logo</a>
         <ul>
             <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
             <li><a href="<?php echo e(url('exams_history')); ?>" class="active">Exam History</a></li>
             <li><a href="<?php echo e(url('stdntappointment')); ?>">Appointment</a></li>
             <li><a href="<?php echo e(url('appointment_history')); ?>">My Appointments</a></li>
         </ul>
     </header>
     <div class="examscard">          
                <div class="card-body"> 
                <table class="table table-striped">
               
   <thead>
   <div class="panel-body">
   <tr>
   <th colspan="3"><center><h2>Exams History</h2></center></th>
</tr>
   <tr>
<td><center>Exam Result </center></td>
<td><center>Date & Time</center></td>
<td><center>Action </center></td>
</tr>
  </thead>
  <tbody id="dynamic-row">
  <?php $__currentLoopData = $myexams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $examhistory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>

<td><center><p><?php echo e($examhistory->result_name); ?></p></center></td>
<td><center><p><?php echo e($examhistory->created_at); ?><p></center></td>
<td><center>
  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
</center></td> 
</tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>

</table>

                    </div>
                </div>
            </div>
        </div>
<a href="<?php echo e(url('home')); ?>"><button class="complete">Back to menu</button></a>
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
                    tableRow = '<td>'+value.idnum+'</td><td>'+value.lname+'</td><td>'+value.fname+'</td><td>'+value.course+'</td><td>'+value.year+'</td><td>'+value.email+'</td><td>'+value.roles+'</td>><td>'+value.action+'</td></tr>';
                    $('#dynamic-row').append(tableRow);
                });
            }
        });
    });
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/admin/users/student/exams_history.blade.php ENDPATH**/ ?>
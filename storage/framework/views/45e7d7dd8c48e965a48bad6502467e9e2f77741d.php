<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/calendar.css')); ?>" rel="stylesheet">`
<section>
     <header>
         <a href="#" class="logo">Logo</a>
         <ul>
             <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
             <li><a href="<?php echo e(url('exams_history')); ?>">Exam History</a></li>
             <li><a href="<?php echo e(url('stdntappointment')); ?>"class="active">Appointment</a></li>
             <li><a href="<?php echo e(url('appointment_history')); ?>">My Appointments</a></li>
         </ul>
     </header>
     <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="light">
    <center>
<div class="calendarcontainer">
    <div class="calendar" id="blur">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div style='color:red'>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days" id ="hide"></div>
        </div>
        <div class="month-list"></div>
        </div>
    </div>
    <div id="popup">
        <h2><div><center>Description</center></div></h2>
        <div id="appointmentDate"></div>
        <p>No Appointment in this current Date<p><br>
        <h3><div><center>Want to make an Appointment ?</center></div></h3>
        <form method="post" action="stdntappointment">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="date" id="appointdate"><br>
        <label>Time: </label>
        <select name="time">
        <!-- <optgroup>Morning</optgroup> -->
      <option value="9:00-10:00 AM">9:00-10:00 AM</option>
      <option value="10:00-11:00 AM">10:00-11:00 AM</option>
      <option value="11:00-12:00 PM">11:00-12:00 PM</option>
      <!-- <optgroup>Afternoon</optgroup> -->
      <option value="1:00-2:00 PM">1:00-2:00 PM</option>
      <option value="2:00-3:00 PM">2:00-3:00 PM</option>
      <option value="3:00-4:00 PM">3:00-4:00 PM</option>
    </select>
    <br>
  <input readonly="readonly" type="hidden" name="status" value="Pending">
  <br>
  <button type="submit">Submit</button>
</form>

        <div onclick="toggle()"><center>Close</center></div>
    </div>
    
    
    <script src="js/calendar.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/admin/users/student/stdntappointment.blade.php ENDPATH**/ ?>
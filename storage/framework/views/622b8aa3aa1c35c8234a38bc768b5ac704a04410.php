<?php $__env->startSection('content'); ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('hasrole', 'admin')): ?>
        <div class="container">
            <div class="row justify-content-center">
                    <div class="admincard">
                    <div class="admincontainer">
                    <div class="adminbox">
                    <div class="card-body">
                    <div class="adminicon">01</div>
                    <div class="admincontent">
                    <h3>List of Users</h3>
                     <div class="managebtn"><a href="<?php echo e(route('admin.users.index')); ?>">Manage Users</div></a>
                 </div>
             </div>
             </div>
             <div class="adminbox">
                    <div class="card-body">
                    <div class="adminicon">02</div>
                    <div class="admincontent">
                    <h3>Add Users</h3>
                     <div class="managebtn"><a href="#">Add User</div></a>
                    </div>
                    </div>
                    </div>
        <?php endif; ?>

                <?php if (\Illuminate\Support\Facades\Blade::check('hasrole', 'student')): ?>
                <div class="studentbody">
<section>
     <header>
         <a href="#" class="logo">Logo</a>
         <ul>
             <li><a href="<?php echo e(url('home')); ?>" class="active">Home</a></li>
             <li><a href="<?php echo e(url('exams_history')); ?>">Exam History</a></li>
             <li><a href="<?php echo e(url('stdntappointment')); ?>">Appointment</a></li>
             <li><a href="<?php echo e(url('appointment_history')); ?>">My Appointments</a></li>
         </ul>
     </header>
     <div class="content">
                    <div class="container-fluid">
                                <div class="homecard">
                                    <div class="card-body">
                                    <center><img src="<?php echo e(asset('img/wellness.png')); ?>"></center>
                                    <div class="card2">
           <div class="imgBox">
            <img src="<?php echo e(asset('img/wellnesslogo.png')); ?>">
            </div>
            <div class="details">
                <div class="a"><a href="<?php echo e(url('wellness')); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Read
                    </a></div>
            </div>
        </div>
        <div class="cardcontainer">
        <div class="card-body">
            <center><img src="<?php echo e(asset('img/exams.png')); ?>"></center>
                <div class="card2">
                        <div class="imgBox">
                            <img src="<?php echo e(asset('img/stresslogo.png')); ?>">
                        </div>
                        <div class="details">
                                <div class="a"> <a href="<?php echo e(url('stress_exam')); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Take Test
                    </a></div>
                </div>
            </div>
                <div class="card2">
                        <div class="imgBox">
                            <img src="<?php echo e(asset('img/learnerslogo.png')); ?>">
                        </div>
                        <div class="details">
                                <div class="a"><a href="<?php echo e(url('learner_exam')); ?>">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Take Test
                        </a>
                        </div></div>
                    </div>
                    <div class="container2">
                        <div class="card2">
                        <div class="imgBox">
                            <img src="<?php echo e(asset('img/personalitylogo.png')); ?>">
                        </div>
                        <div class="details">
                                <div class="a"><a href="<?php echo e(url('personality_exam')); ?>">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Take Test
                        </a></div>
                        </div>
                    </div>
         </div>
</div>


                </div>
            </div>

    </section>

                <?php endif; ?>
                <?php if (\Illuminate\Support\Facades\Blade::check('hasrole', 'user')): ?>
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                    Wait for the admin to verify your accout.
                <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
                <?php if (\Illuminate\Support\Facades\Blade::check('hasrole', 'councilour')): ?>
                <section>
     <header>
         <a href="#" class="logo">Logo</a>
         <ul>
             <li><a href="<?php echo e(url('home')); ?>" class="active">Home</a></li>
             <li><a href="<?php echo e(url('viewquestions')); ?>">Questions</a></li>
             <li><a href="<?php echo e(url('viewtime')); ?>">List of Appointments</a></li>
             <li><a href="<?php echo e(url('myfinishappointments')); ?>">Completed Appointments</a></li>
         </ul>
     </header>
     <div class="content">
                    <div class="container-fluid">
                                <div class="homecard">
                                <canvas id="pie-chart" width="800" height="400"></canvas>
                                <input type="hidden" id="accept" value="<?php echo e($accept); ?>"/>
                                <input type="hidden" id="pending" value="<?php echo e($pending); ?>"/>
                                <input type="hidden" id="total" value="<?php echo e($total); ?>"/>
                                <script src="js/piechart.js"></script>


                <?php endif; ?>
<?php $__env->stopSection(); ?>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/home.blade.php ENDPATH**/ ?>
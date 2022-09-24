<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">   
        <title> Registration Form </title>
        <link href="<?php echo e(asset('css/register.css')); ?>" rel="stylesheet">
        <meta name="viewport" content="width=device-width,  initial-scale=1.0">
    </head> 
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
            <div class="title">Registration</div>
                    <form method="POST" action="<?php echo e(route('adminregister')); ?>">
                        <?php echo csrf_field(); ?>
                    <div class="user-details">
                    <div class="input-box">
                    <span for="idnum" class="details"><?php echo e(__('ID Number')); ?></span>
                                <input id="idnum" type="text" class="form-control <?php if ($errors->has('idnum')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('idnum'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="idnum" value="<?php echo e(old('idnum')); ?>" required autocomplete="idnum" autofocus>
                                <?php if ($errors->has('idnum')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('idnum'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="input-box">
                            <span for="fname" class="details"><?php echo e(__('First Name')); ?></span>
                                <input id="fname" type="text" class="form-control <?php if ($errors->has('fname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fname" required autocomplete="fname" autofocus>
                                <?php if ($errors->has('fname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fname'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="input-box">
                            <span for="mname" class="details"><?php echo e(__('Middle Initial')); ?></span>
                                <input id="mname" type="text" class="form-control <?php if ($errors->has('mname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="mname" required autocomplete="mname" autofocus>
                                <?php if ($errors->has('mname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('mname'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        <div class="input-box">
                        <span for="lname" class="details"><?php echo e(__('Last Name')); ?></span>
                                <input id="lname" type="text" class="form-control <?php if ($errors->has('lname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lname" required autocomplete="lname" autofocus>
                                <?php if ($errors->has('lname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lname'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="input-box">
                            <span for="course" class="details"><?php echo e(__('Course')); ?></span>
                         <select name="course" id="course">
                         <optgroup label="Bachelour of Science">
                         <option value="IT">Information Technology(IT)</option>
                         <option value="ICT">Information and Communication Technologies(ICT)</option>
                         <option value="CS">Computer Science(CS)</option>
                         <option value="IE">Industrial Engineering(IE)</option>
                         <option value="CE">Computer Engineering(CE)</option>
                         </optgroup>
                         <optgroup label="Engineering">
                         <option value="comp">Computer</option>
                         <option value="gols">Gols</option>
                         <option value="ind">Industrial</option>
                         </optgroup>
                       </select>
                        </div>
                        <div class="input-box">
                        <span for="year" class="details"><?php echo e(__('Year')); ?></span>
                         <select name="year" id="year">
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                    </select>                     
                        </div>
                        <div class="input-box">
                            <span for="email" class="details"><?php echo e(__('E-Mail Address')); ?></span>
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        <div class="input-box">
                        <span for="password" class="details"><?php echo e(__('Password')); ?></span>
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">
                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        <div class="input-box">
                        <span for="password-confirm" class="details"><?php echo e(__('Confirm Password')); ?></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            </div>
                            <div class="button">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/admin/users/adminregister.blade.php ENDPATH**/ ?>
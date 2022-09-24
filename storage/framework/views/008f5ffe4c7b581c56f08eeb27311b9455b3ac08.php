<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/loginstyle.css')); ?>">
</head>
<body> 
    </head>
    <body>
        <div class="loginbody">
            <div class="imgBx">
                <img src="../img/mh2.jpg">
            </div>
            <div class="contentBx">
                <div class="formBx">
                   <h2>Pysch Care 2.0</h2>
                   <h3>Login</h3>
                   <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                       <div class="inputBx">
                           <span>Email</span>
                           <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
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
                       <div class="inputBx">
                           <span>Password</span>
                           <input type="password" id="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">
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
                       <div class="remember">
                           <label><input type="checkbox" name=" ">Remember Me</label>
                       </div> 
                       <div class="inputBx">
                        <input type="submit" value="Sign in" name="">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\PsychThesis\resources\views/auth/login.blade.php ENDPATH**/ ?>
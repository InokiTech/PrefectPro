<?php $__env->startSection('title'); ?> <?php echo e(get_phrase('Login').' | '.get_settings('system_title')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2"
            style="background-image: url('<?php echo e(asset('frontend/assets/images/left image.jpg')); ?>')"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="d-flex row align-items-center justify-content-center">
                    <div class="logo-img text-center my-0">
                        <a href="#">
                            <!--<img src="<?php echo e(asset('frontend/assets/images/MicrosoftTeams-image (12).png')); ?>" class="" />-->
                        </a>
                    </div>
                    <div class="col-md-7 login-form">
                        <h3>Login to <strong>Prefect Pro</strong></h3>
                        <p class="mt-4 mb-4">Welcome</p>
                        <form method="post" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group first">
                                <label for="email"><?php echo e(get_phrase('Email')); ?></label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Your email address">
                            </div>
                            <div class="form-group last my-3">
                                <label for="password"><?php echo e(get_phrase('Password')); ?></label>
                                <input type="password" class="form-control" name="password" placeholder="Your Password"
                                    id="password" />
                            </div>

                            <div class="d-flex mb-5 align-items-center justify-content-between">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="<?php echo e(route('password.request')); ?>" target="_blank"
                                        class="forgot-pass text-dark"><?php echo e(get_phrase('Forgot password')); ?></a></span>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.signin_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/swiftypo/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    .panel-default{
        margin-top: 170px;
    }
    .copyright{
        margin-top: 75px!important;
    }

    body{
        background-color: #f2f0f0!important;
    }
    
    

</style>
<div id="app">
<div class="container">
    <?php if(session('status')): ?>
        <div class="col-md-12">
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Customer Signup To Enquire Us</h3>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>" accept-charset="utf-8">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?> required">
                            <label for="Name" class="col-sm-4 control-label">Name: </label>
                            <div class="col-sm-8">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> required">
                            <label for="Email" class="col-sm-4 control-label">Email: </label>
                            <div class="col-sm-8">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?> required">
                            <label for="Mobile" class="col-sm-4 control-label">Mobile: </label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">+91</span>
                                   <input id="phone" type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>

                                    <?php if($errors->has('phone')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('phone')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="help-block">You can receive OTP on your mobile phone directly</div>
                            </div>
                        </div>
                        <div class="controls">
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?> required">
                                <label for="Password" class="col-sm-4 control-label">Password: </label>
                                <div class="col-sm-8">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="Password Confirm" class="col-sm-4 control-label">Password Confirm: </label>
                                <div class="col-sm-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-4">
                            <span>By clicking on Sign Up. I agree to all <a style="text-decoration:underline;margin-bottom:10px;" target="_blank" alt="Privacy Policy" href="javascript:;" class="colorbox cboxElement">T&amp;C</a></span>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
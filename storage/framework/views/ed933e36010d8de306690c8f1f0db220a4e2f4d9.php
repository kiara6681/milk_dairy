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

 <div id="app" >
        
   <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="http://svasthlife.com/App/login">
                        <input type="hidden" name="_token" value="pApvwMlpYcNrMUg5woL5uKnB4a78rMAf6qNlkuZy">

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail || Mobile</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Email Address || Mobile Number" type="text" class="form-control" name="email" value="" >
                                                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" > Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="password/reset.html">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.public_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
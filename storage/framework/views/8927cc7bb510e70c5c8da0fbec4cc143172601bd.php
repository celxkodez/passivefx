<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta charset="utf-8" />
    <title>2FA Authentication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('home/home/images/favicon.pg')); ?>">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('home/home/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('home/home/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('home/home/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('home/home/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('home/home/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('home/home/css/skins/orange.css')); ?>">
	
	<!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="<?php echo e(asset('home/home/css/skins/orange.css')); ?>" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="<?php echo e(asset('home/home/css/skins/green.css')); ?>" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="<?php echo e(asset('home/home/css/skins/blue.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/home/css/styleswitcher.css')); ?>" />

    <!-- Template JS Files -->
    <script src="<?php echo e(asset('home/home/js/modernizr.js')); ?>"></script>

</head>

<body class="auth-page" style="background-color:#e9e9e9;">
	
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container user-auth" style="padding:40px;">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5" style="background:#fff; padding:40px;">
				
				<?php if(Session::has('message')): ?>
		        <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-warning"></i> <?php echo e(Session::get('message')); ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
			
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h4 class="title-head" style="font-size:1.1em; color:#555;">A 2FA authentication code has been sent to your email, kindly check your email and enter code below to continue.</h4>
						</div>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form role="form" method="POST" action="<?php echo e(route('2fa')); ?>">

                        <?php echo e(csrf_field()); ?>

                        
                        <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                        
                        <input id="2fa" type="text" class="form-control" name="2fa" style="background-color:#fff; color:#222;" placeholder="Enter the code you received here." required autofocus>
                        
                        <?php if($errors->has('2fa')): ?>
                        
                        <span class="help-block">
                        
                        <strong><?php echo e($errors->first('2fa')); ?></strong>
                        
                        </span>
                        
                        <?php endif; ?>
                        
                        </div>
                        
                        <div class="form-group">
                        
                        <button class="btn btn-primary" type="submit">Submit</button><br>
                        <p>Are you stucked here?</p>
                        <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-primary">
                        Repeat login
                    	</a>
                        
                        </div>
                        
                        </form>
                        
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                        </form>
                        
						<!-- Form Ends -->
					</div>
				</div>
			
			</div>
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->
</body>

</html>

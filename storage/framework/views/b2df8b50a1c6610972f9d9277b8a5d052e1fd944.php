<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="csrf-token" content="V8WB9fvvkV1pLFg429d7BhRo6eVeK9zRxAhboXib">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Passive FX | Invest in a breeze</title>



<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/animate/animate.min.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/icofont/icofont.min.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/jquery/magnific-popup.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/aos/aos.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/venobox/venobox.css" rel="stylesheet">
<link href="https://onlinetrade.brynamics.xyz/trade/temp/lib/icofont/icofont.min.css" rel="stylesheet">

<link href="https://onlinetrade.brynamics.xyz/trade/temp/css/frontend_style_blue.css" rel="stylesheet">
<!-- JavaScript Libraries -->
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/jquery/jquery.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/jquery.easing/jquery.easing.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/php-email-form/validate.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/waypoints/jquery.waypoints.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/counterup/counterup.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/venobox/venobox.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/owl.carousel/owl.carousel.min.js"></script>
<script src="https://onlinetrade.brynamics.xyz/trade/temp/lib/aos/aos.js"></script>

<!-- Template Main Javascript File -->
<script src="https://onlinetrade.brynamics.xyz/trade/temp/js/main.js"></script>

</head>
<body class="d-flex flex-column h-100 auth-page">
<!-- ======= Loginup Section ======= -->
<section class="auth">
<div class="container">
<div class="row justify-content-center user-auth">
<div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
<div class="text-center mb-4">
<a href="https://onlinetrade.brynamics.xyz/trade" class="auth__logo img-fluid"><img
src="https://onlinetrade.brynamics.xyz/trade/cloud/app/images/logo02.png" alt="Online Trader"> </a>
</div>
<div class="card ">
<h1 class="text-center mt-3"> User Login</h1>	                        <form method="POST" action="<?php echo e(route('login')); ?>" class="mt-5 card__form">	                            <?php echo e(csrf_field()); ?> 	                            	                            <div class="form-group ">	                                <?php if($errors->has('email')): ?>	                                    <span class="help-block">	                                        <strong><?php echo e($errors->first('email')); ?></strong>	                                    </span>	                                <?php endif; ?>	                                <label for="email">Email address</label>	                                <input type="email" class="form-control" name ="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="name@example.com" required>	                            </div>	                            <div class="form-group">	                                <?php if($errors->has('password')): ?>	                                <span class="help-block">	                                    <strong><?php echo e($errors->first('password')); ?></strong>	                                </span>	                                <?php endif; ?>	                                <label for="password">Password</label>	                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>	                            </div>	                            	                            <div class="form-group">	                                <button class="btn btn-primary mt-4" type="submit">Login</button>	                            </div>	    	                            <div class="text-center mb-3">	                                <small class=" text-center mb-2">Forget your Password <a href="<?php echo e(url('/password/reset')); ?>" class="link ml-1">Reset.</a> </small>	                                <small class=" text-center">Dont have an Account yet? <a href="<?php echo e(route('register')); ?>" class="link ml-1">Sign up.</a> </small>	                            </div>
<div class="text-center">
<hr>
<small class=" text-center">&copy; Copyright 2020 &nbsp; Online Trader &nbsp; All Rights Reserved.</small>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</body>
</html>
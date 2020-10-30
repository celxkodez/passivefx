<!DOCTYPE HTML>
<html>
<head>
<title>PassiveFX Invest  | <?php echo e($title); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<!--PayPal-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--/PayPal-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo e(asset('css/dashboard_style_'.$settings->site_colour.'.css')); ?>" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="https://coinfxcloud.com/css/dashboard_style_blue.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="<?php echo e(asset('js/jquery-1.11.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/modernizr.custom.js')); ?>"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo e(asset('css/mystyle.css')); ?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->


<!-- Fonts and icons -->
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/webfont/webfont.min.js"></script>
<!-- Sweet Alert -->
<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/sweetalert/sweetalert.min.js "></script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://onlinetrade.brynamics.xyz/trade/dash/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://onlinetrade.brynamics.xyz/trade/dash/css/fonts.min.css">
	<link rel="stylesheet" href="https://onlinetrade.brynamics.xyz/trade/dash/css/atlantis.min.css">
	<link rel="stylesheet" href="https://onlinetrade.brynamics.xyz/trade/dash/css/customs.css">
	<link rel="stylesheet" href="https://onlinetrade.brynamics.xyz/trade/dash/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/app.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/bootstrap-select.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/chocolat.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/clndr.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/custom.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/dashboard_style_blue.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dashboard_style_default.css')); ?>"/>
	
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/flexslider.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/frontend_style_blue.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/frontend_style_default.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/hover-min.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/jquery.bootstrap-touchspin.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/jqvmap.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/nouislider.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/owl.theme.default.min.css"/>
	<!--<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/owl.video.play.html"/>-->
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/patros.css"/>
	<link rel="stylesheet" type="text/css" href="https://passivefxinvest.com/css/nouislider.pips.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/responsivef.css')); ?>"/>
	
	<style>
		@media  screen and (max-width: 991px){

		
			.sidebar {
					position: fixed;
					left: 0!important;
					right: 0;
					z-index: -1;
					/* -webkit-transform: translate3d(0,0,0) ; */
					/* -moz-transform: translate3d(-270px,0,0);
					-o-transform: translate3d(-270px,0,0); */
					/* -ms-transform: translate3d(0,0,0) ; */
					transform: translate3d(0,0,0)!important;
					transition: all .5s;
					margin-top: 0;
			}

		}

										.sidebar, .sidebar[data-background-color=white] {
    position: fixed;
    top: 100px;
    /* bottom: 0;
    left: 0;
    width: 250px;
    margin-top: 62px;
    display: block;
    z-index: 1000;
    color: #fff;
    font-weight: 200; */
    background: none !important;
    -webkit-box-shadow: none !important;
    /* -moz-box-shadow: 4px 4px 10px rgba(69,65,78,.06); */
    /* box-shadow: 0px 0px 0px rgba(69,65,78,.06) !important;  */
    box-shadow: none !important;
    /* transition: all .3s; */
}


	.cbp-spmenu {
		overflow-y: scroll;
	}

	.cbp-spmenu::-webkit-scrollbar{
		width: 8px;
		
	}

	.cbp-spmenu::-webkit-scrollbar-track {
		padding: 2px;
		background-color: bisque;
		width: 4px;
		border-radius: 3em;
		border-color: bisque;
}
.cbp-spmenu::-webkit-scrollbar-thumb {
  background-color: #555;   
  border-radius: 20px;       
}
.z-index {
	z-index: 10;
}
	
	</style>

	

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 




<script src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">{
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "BTC",
    "ETH",
    "LTC",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "CNY"
  ],
  "isTransparent": false,
  "colorTheme": "light",
  "width": "100%",
  "height": "100%",
  "locale": "en"
}</script>






<!-- Metis Menu -->
<script src="<?php echo e(asset('js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
    
    <!--PayPal-->
    <script>
    
    // Add your client ID and secret
    var PAYPAL_CLIENT = '<?php echo e($settings->pp_ci); ?>';
    var PAYPAL_SECRET = '<?php echo e($settings->pp_cs); ?>';
    
    // Point your server to the PayPal API
    var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';

    </script>
    
  <!--  <script-->
  <!--  src="https://www.paypal.com/sdk/js?client-id=<?php echo e($settings->pp_ci); ?>">-->
  <!--</script>-->
  
  <!--/PayPal-->
	
<!--Start of Tawk.to Script-->
<script type="text/javascript">
<?php echo $settings->tawk_to; ?>


</script>
<!--End of Tawk.to Script-->

	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="<?php echo e(url('/dashboard')); ?>" class="active"><i class="fa fa-dashboard nav_icon"></i>Dashboard</a>
						</li>
						<li class="">
							<a href="#"><i class="fa fa-user nav_icon"></i>Account <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo e(url('dashboard/changepassword')); ?>">Change Password</a>
									<a href="<?php echo e(url('dashboard/accountdetails')); ?>">Update Account</a>
									<?php if(Auth::user()->type =='0'): ?>
									<a href="<?php echo e(url('dashboard/notification')); ?>">Notification</a>
									<!--<a href="<?php echo e(url('dashboard/profile')); ?>">Profile</a>-->
									<?php endif; ?>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>

						<?php if(Auth::user()->type =='0'): ?>
						
						<li>
							<a href="<?php echo e(url('dashboard/support')); ?>"><i class="fa fa-ticket nav_icon"></i>Support</a>
							
						</li>
						
						<li>
							<a href="<?php echo e(url('dashboard/tradinghistory')); ?>"><i class="fa fa-briefcase nav_icon"></i>Transaction (ROI) log</a>
						</li>

						<li>
							<a href="<?php echo e(url('dashboard/deposits')); ?>"><i class="fa fa-money nav_icon"></i>Deposits</a>
						</li>

						<li>
							<a href="<?php echo e(url('dashboard/withdrawals')); ?>"><i class="fa fa-dollar nav_icon"></i>Withdrawals</a>
						</li>
						
						<li class="">
							<a href="#"><i class="fa fa-cog nav_icon"></i>Packages <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo e(url('dashboard/mplans')); ?>"><i class="fa fa-list nav_icon"></i>Investment plans</a>
									<a href="<?php echo e(url('dashboard/myplans')); ?>"><i class="fa fa-eye nav_icon"></i>My packages</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>


						<?php endif; ?>
						
						<?php if(Auth::user()->type =='1' or Auth::user()->type =='2'): ?>
						<li>
							<a href="<?php echo e(url('dashboard/plans')); ?>"><i class="fa fa-cog nav_icon"></i>Investment plans</a>
						</li>

						<li>
							<a href="<?php echo e(url('dashboard/manageusers')); ?>"><i class="fa fa-users nav_icon"></i>Manage users</a>
						</li>
						<li>
							<a href="<?php echo e(url('dashboard/mwithdrawals')); ?>"><i class="fa fa-th-list nav_icon"></i>Manage withdrawals</a>
						</li>
						<li>
							<a href="<?php echo e(url('dashboard/mdeposits')); ?>"><i class="fa fa-money nav_icon"></i>Deposits</a>
						</li>
						<li>
							<a href="<?php echo e(url('dashboard/settings')); ?>"><i class="fa fa-gear nav_icon"></i>Settings</a>
						</li>

						<li>
							<a href="<?php echo e(url('dashboard/agents')); ?>"><i class="fa fa-users nav_icon"></i>View Agents</a>
						</li>
						
						<?php endif; ?>
						
						<li>
							<a href="<?php echo e(url('dashboard/referuser')); ?>"><i class="fa fa-users nav_icon"></i>Refer users</a>
						</li>
						
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo" style="padding:6px; width:200px;">
					<a href="<?php echo e(url('/')); ?>" style="padding-left:15px !important;">
						<h4><?php echo e($settings->site_name); ?></h4>
						
					</a>
				</div>
				<!--//logo-->
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details" style="padding:8px; margin-top:15px;">	
					<?php if(Auth::user()->type =='0'): ?>
					<a href="<?php echo e(url('dashboard/notification')); ?>"><i style="color:white; "class="fa fa-bell text-white"></i></a> &nbsp;| 
					<?php endif; ?>
					<a href="<?php echo e(url('dashboard/profile')); ?>"><i class="fa fa-user "></i>  <?php echo e(Auth::user()->name); ?></a>
					<?php if($settings->enable_kyc =="yes"): ?>
					<?php if(Auth::user()->account_verify=='Verified'): ?>	
				    | <a href="#"><i class="glyphicon glyphicon-ok"></i> KYC status: Account verified</a>
				    <?php else: ?>
				    | <a href="#" data-toggle="modal" data-target="#verifyModal">Verify Account</a> | <a>KYC status: <?php echo e(Auth::user()->account_verify); ?></a>
				    <?php endif; ?>
				    <?php endif; ?>
					| <a href="<?php echo e(url('dashboard/changepassword')); ?>"><i class="fa fa-key"></i> Change Password</a>
					| <a href="<?php echo e(url('dashboard/accountdetails')); ?>"><i class="fa fa-edit"></i> Update Account</a>
					| <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    	</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		
		<!-- Verify Modal -->
			<div id="verifyModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">KYC verification - Upload documents below to get verified.</h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="<?php echo e(action('SomeController@savevdocs')); ?>"  enctype="multipart/form-data">
                            <label>Valid identity card. (e.g. Drivers licence, international passport or any government approved document).</label>
                            <input type="file" name="id" required><br>
					   		<label>Passport photogragh</label>
                            <input type="file" name="passport" required><br>
                               
					   		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					   		<input type="submit" class="btn btn-default" value="Submit documents">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>

			<script>
					let btn = document.querySelector('#showLeftPush');
					let sidebar = document.querySelector('.sidebar');
					console.log(btn);
			
					btn.addEventListener('click', ()=>{
						console.log('clicked');
						if(sidebar.classList.contains('z-index')){
							sidebar.classList.remove('z-index');
						}else{
							sidebar.classList.add('z-index');
						}
					});
				</script>
			<!-- /Verify Modal -->
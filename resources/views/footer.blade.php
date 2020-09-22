	<!--footer-->
		<div class="footer">
		   <p>All Rights Reserved &copy; PassiveFX Invest 2020</p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="{{ asset('js/classie.js')}}"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
					console.log('hey');
				}
			}
		</script>

   
       Core JS Files   
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/core/jquery.3.2.1.min.js "></script>
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/core/popper.min.js"></script>
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/core/bootstrap.min.js "></script>
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/customs.js"></script>
	
		scrolling js
	
	<script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
	<script src="{{ asset('js/scripts.js')}}"></script>
	
		//scrolling js
	 Bootstrap Core JavaScript 
   <script src="{{ asset('js/bootstrap.js')}}"> </script>
   
	 jQuery UI 
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	 jQuery Scrollbar 
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js "></script>

	 jQuery Sparkline 
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js "></script>

	 Sweet Alert 
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/sweetalert/sweetalert.min.js "></script>
	 Bootstrap Notify 
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js "></script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>

	 Atlantis JS 
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/atlantis.min.js"></script>
	<script src="https://onlinetrade.brynamics.xyz/trade/dash/js/atlantis.js"></script>
   
    Other JS 
   <script src="https://passivefxinvest.com/js/app.js"></script>
   <script src="https://passivefxinvest.com/js/jquery-1.11.1.min.js"></script>
   <script src="https://passivefxinvest.com/js/bootstrap-select.min.js"></script>
   <script src="https://passivefxinvest.com/js/bootstrap.js"></script>
   <script src="https://passivefxinvest.com/js/bootstrap.min.js"></script>
   <script src="https://passivefxinvest.com/js/Chart.js"></script>
   <script src="https://passivefxinvest.com/js/classie.js"></script>
    <script src="https://passivefxinvest.com/js/moment-2.2.1.js"></script>
   <script src="https://passivefxinvest.com/js/clndr.js"></script>
   <script src="https://passivefxinvest.com/js/custom.js"></script>
   <script src="https://passivefxinvest.com/js/easing.js"></script>
   <script src="https://passivefxinvest.com/js/fliplightbox.min.js"></script>
   <script src="https://passivefxinvest.com/js/gmaps.js"></script>
   <script src="https://passivefxinvest.com/js/isotope.js"></script>
   
   <script src="https://passivefxinvest.com/js/jquery.chocolat.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.circlechart.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.counterup.min.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.easing.min.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.flexslider.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.magnific-popup.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.magnific-popup.min.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.min.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.mixitup.min.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.nicescroll.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.quicksand.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.scrollTo.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.validate.min.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.vmap.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.vmap.sampledata.js"></script>
   <script src="https://passivefxinvest.com/js/jquery.vmap.world.js"></script>
   
   <script src="https://passivefxinvest.com/js/map.js"></script>
   <script src="https://passivefxinvest.com/js/map-helper.js"></script>
   <script src="https://passivefxinvest.com/js/metisMenu.min.js"></script>
   <script src="https://passivefxinvest.com/js/modernizr.custom.97074.js"></script>
   <script src="https://passivefxinvest.com/js/modernizr.custom.js"></script>
  
   <script src="https://passivefxinvest.com/js/move-top.js"></script>
   <script src="https://passivefxinvest.com/js/owl.carousel.min.js"></script>
   <script src="https://passivefxinvest.com/js/scripts.js"></script>
   <script src="https://passivefxinvest.com/js/site.js"></script>
   <script src="https://passivefxinvest.com/js/skycons.js"></script>
   <script src="https://passivefxinvest.com/js/underscore-min.js"></script>
   <script src="https://passivefxinvest.com/js/validator.min.js"></script>
   <script src="https://passivefxinvest.com/js/waypoints.min.js"></script>
   <script src="https://passivefxinvest.com/js/wow.min.js"></script>
   
</body>
</html>
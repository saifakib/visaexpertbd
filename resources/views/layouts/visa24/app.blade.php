@include('layouts.visa24.partials.top')


<body class="page-index has-hero">

	<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">
		
		<!-- ======== header and navigation start ======== -->
		<div id="navigation" class="wrapper">

				<!-- ========navbar start ========-->     
				@include('layouts.visa24.partials.navbar')
				<!-- ========navbar end ========-->

				<!-- ========Header start ========-->
				
				@include('layouts.visa24.partials.header')
				<!-- ========Header end ========-->
		</div>
		<!-- ======== header and navigation end ======== -->  
		
		<!-- ======== heading searching option start ======== --> 

	<!-- <div class="hero" id="highlighted">
		<div class="inner">
			
			<div id="highlighted-slider" class="">
					<div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp","autoplay":true}'>
						<div class="item">
							<div class="row">
								<div class="col-md-12 text-left-md item-caption">
									<h2 class="h1 text-weight-light ">
									&nbsp; &nbsp; 
									</h2>		            
									<div class="clearfix" style="height:50px;">&nbsp;</div>         

									<form accept-charset="UTF-8" role="form" action="#" >
										<div class="row">
										<div class="col-md-2">&nbsp;</div>
										<div class="col-md-3">
											<div class="form-group">
													<div class="input-group input-group-lg">
														<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
														<input type="text" class="form-control" placeholder="Visa type" name="search_key" id="search_key">
													</div>
												</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
													<div class="input-group input-group-lg">
														<span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
														<input type="text" class="form-control" placeholder="Country" name="search_location" id="search_location">
													</div>
												</div>
										</div>
										<div class="col-md-2">
											<button class="btn btn-lg btn-primary btn-block" type="submit"><i class="glyphicon glyphicon-search"></i></button>
										</div>
										</div>              
									</form>
									
									<div class="col-md-2">&nbsp;</div>
									<div class="col-md-10">
										<span style="color:#fff; font-weight:bold; font-size:26px; text-transform:uppercase;">We Have <span class="text-primary">305</span> visa offers for you</span>
									</div>    
								</div>		          
							</div>
						</div>		        
				</div>
			</div>
			
		</div>
	</div>	 -->
	<!-- ======== heading searching option end ======== -->      
	</div>

	<!-- ======== Main content start ======== -->
	<!-- ======== main content end ======== -->
	@yield('content')
	<!-- ======== content area start ======== -->
	<!-- ======== content area end ======== -->

	<!-- ======== footer start ======== -->
	@include('layouts.visa24.partials.footer')
	
	<!-- ======== footer end ======== -->

	<!-- Required JavaScript Libraries -->

			<script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript"></script>	
			<script src="{{ asset('assets/lib/bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
			<script src="{{ asset('assets/lib/stellar.min.js') }}"></script>
			<script src="{{ asset('assets/lib/waypoints.min.js') }}"></script>
			<script src="{{ asset('assets/lib/counterup.min.js') }}"></script>
			<script src="{{ asset('assets/js/custom.js') }}"></script>

			@stack('js')

</body>
</html>

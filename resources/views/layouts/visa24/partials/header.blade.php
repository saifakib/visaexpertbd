<div class="header">
	<div class="header-inner container" style="width:100% !important">
		<div class="row">
			<!--<div class="col-md-10" style="height:120px">-->
				<!--<div class="col-md-4">&nbsp;</div>                -->
				<!--<div class="col-md-5">	               -->
					<!--<a href="index.html" title="Home" class="">-->
						<!-- <img src="{{ asset('assets/img/companyInfo/logo.png') }}" alt="" />                     -->
					<!--</a>-->
				<!--</div> -->
				<!--<div class="col-md-3">	               -->
					<!-- <img src="{{ asset('assets/img/helpline.png') }}" alt="" /> -->
				<!--</div>                               -->
			<!--</div>-->
			<!--header rightside-->
			<div class="col-md-12">
			<!--user menu-->
			@guest
				<ul class="list-inline user-menu pull-right">
					<li class="hidden-xs" style="font-size:15px"><i class="fa fa-edit text-primary"></i> <a href="{{ route('register') }}" class="text-uppercase" style="font-size:15px">Register</a></li>
					<li class="hidden-xs" style="font-size:15px"><i class="fa fa-sign-in text-primary"></i> <a href="{{ route('login') }}" class="text-uppercase" style="font-size:15px">Login</a></li>
				</ul>
			@else
				@if(Auth::user()->role_id == 0)
					<ul class="list-inline user-menu pull-right">
						<li class="hidden-xs" style="font-size:15px"><i class="fa fa-edit text-primary"></i> <a href="{{ route('logout') }}" class="text-uppercase" style="font-size:15px">Logout</a></li>
					</ul>
				@endif
				@if(Auth::user()->role_id == 1)
					<ul class="list-inline user-menu pull-right">
						<li class="hidden-xs" style="font-size:15px"><i class="fa fa-edit text-primary"></i> <a href="{{ route('logout') }}" class="text-uppercase" style="font-size:15px">Logout</a></li>
					</ul>
				@endif
				@if(Auth::user()->role_id == 2)
					<ul class="list-inline user-menu pull-right">
						<li class="hidden-xs" style="font-size:15px"><i class="fa fa-edit text-primary"></i> <a href="{{ route('logout') }}" class="text-uppercase" style="font-size:15px">Logout</a></li>
					</ul>
				@endif
			@endguest
			</div>
		</div>
    </div>
</div>
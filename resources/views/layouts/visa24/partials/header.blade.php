<div class="header">
	<div class="header-inner container" style="width:100% !important">
		<div class="row">
			<div class="col-md-10">
				<div class="col-md-4">&nbsp;</div>                
				<div class="col-md-5">	               
					<a href="index.html" title="Home" class="">
						<img src="{{ asset('assets/img/companyInfo/logo.png') }}" alt="" />                    
					</a>
				</div> 
				<div class="col-md-3">	               
					<img src="{{ asset('assets/img/helpline.png') }}" alt="" />
				</div>                               
			</div>
			<!--header rightside-->
			<div class="col-md-2">
			<!--user menu-->
				<ul class="list-inline user-menu pull-right">
					<li class="hidden-xs"><i class="fa fa-edit text-primary"></i> <a href="{{ route('register') }}" class="text-uppercase">Register</a></li>
					<li class="hidden-xs"><i class="fa fa-sign-in text-primary"></i> <a href="{{ route('login') }}" class="text-uppercase">Login</a></li>
				</ul>
			</div>
		</div>
    </div>
</div>
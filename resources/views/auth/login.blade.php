@extends('layouts.visa24.app')

@section('content')
    <div id="content"> 
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- Login start -->
				<div class="services block block-bg-gradient block-border-bottom ">
					<div class="col-md-6 well">
					    <div class="login">
					        
					     <form method="POST" action="{{ route('login') }}" class="form-validate form-horizontal well">
							 @csrf
					        <fieldset>
					            <legend>Sign In</legend>
					            <div style="margin-bottom: 25px" class="input-group">                   	
					                <input name="username" id="username" value="" class="validate-username form-control required invalid" size="25" required="required" aria-required="true" autofocus="" aria-invalid="true" type="text" placeholder="Username">
					                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                                        
					            </div>

					            <div style="margin-bottom: 25px" class="input-group">                    	
					                <input name="password" id="password" value="" class="validate-password form-control required invalid" size="25" maxlength="99" required="required" aria-required="true" aria-invalid="true" type="password" placeholder="Password">
					                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>                                        
					            </div>

					            <div class="control-group">
					                        
			                        <div class="controls">
			                            <input id="remember" type="checkbox" name="remember" class="inputbox" value="yes" />
			                            <label>Remember me</label>
			                        </div>
			                    </div>

					            <div class="control-group">
				                    <div class="controls">
				                        <button type="submit" class="btn btn-success">
				                            Log in                        </button>
				                    </div>
				                </div>
					            
					            <input type="hidden" name="return" value="" />
					            <input type="hidden" name="08d1ded27d03c827f7ff03da4e3bfcb2" value="1" />
					        </fieldset>
					    </form>

					    </div>

					    <div>
					        <ul class="nav nav-tabs nav-stacked">
					            <li>
					                <a href="/registration.html?view=reset">
					                    Forgot your password?                
					                </a>
					            </li>
					            <li>
					                <a href="/registration.html?view=remind">
					                    Forgot your username?                
					                </a>
					            </li>
					            <li>
					                <a href="/registration.html">
					                        Don't have an account?                    
					                    </a>
					            </li>
					        </ul>
					    </div>
					</div>
						
					 <div class="col-md-6">
				    	<div class="clearfix"></div><br /><br /><br /><br /><br />
				        <div class="col-md-12 pull-right" style="font-size:16px; line-height:30px;">
				            <span class="col-md-4 text-default" style="color:#23b04b; text-align: right; font-size:18px; white-space: nowrap; "><strong>VISA AGENTS :</strong>
				            </span>
							<span class="col-md-8 text-default" style=" text-align:justify;"><strong>You need to log in to search out thousands of prospective candidates who want to apply for your visa.</strong>
							</span>
				            <div class="clearfix"></div>
							<br />
				            <span class="col-md-4 text-default"  style="color:#23b04b; text-align: right; font-size:18px; "><strong>CANDIDATE :</strong>
				            </span>
							<span class="col-md-8 text-default" style=" text-align:justify;"><strong>You need to log in to search out thousands of visa offers and apply for those visas.</strong>
							</span>
				            <div class="clearfix"></div>				           
				       </div>         
				    </div>

				</div>    
				<!-- Login end -->

				<!-- breadcrumb start -->
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li>
							You are here: &#160;
					</li>

					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="#" class="pathway"><span itemprop="name">Home</span></a>
						
							<span class="divider"></span>
								<meta itemprop="position" content="1">
					</li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
						<span itemprop="name">
							Login	
						</span>
						<meta itemprop="position" content="13">
					</li>
				</ul>
				<!-- breadcrumb start -->
			</div>
			<div class="col-md-1"></div>
		</div>	
    </div>	
    @endsection

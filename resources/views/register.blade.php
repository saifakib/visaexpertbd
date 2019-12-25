@extends('layouts.visa24.app')

@section('content')
    <div id="content"> 
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- registration start -->
				<div class="registration">
				    <div class="services block block-bg-gradient block-border-bottom ">

			        <div class="col-md-6">

					<form method="POST" action="{{ route('register') }}" class="form-validate form-horizontal well" enctype="multipart/form-data">
					@csrf
                    <fieldset>

                    <h2 class="block-title">Sign Up</h2>
                                                                        
                    <!--Facebook-->
                    <button type="button" class="btn btn-fb" style="background-color: #3B5998; color:#FFF;"><i class="fa fa-facebook left"></i> 
                    </button>
                    <!--Twitter-->
                    <button type="button" class="btn btn-tw" style="background-color: #55ACEE; color:#FFF;" ><i class="fa fa-twitter left"></i> 
                    </button>
                    <!--Google +-->
                    <button type="button" class="btn btn-gplus" style="background-color: #DD4B39; color:#FFF;"><i class="fa fa-google-plus left"></i> 
                    </button>
                    <!--Linkedin-->
                    <button type="button" class="btn btn-li" style="background-color: #0082CA; color:#FFF;"><i class="fa fa-linkedin left"></i> 
                    </button>
                        
                    <div style="margin-bottom: 25px; margin-top:10px;" class="input-group">                    	
                        <input name="name" value="" class="form-control required invalid" placeholder="Name" size="30" required="required" aria-required="true" aria-invalid="true" type="text">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                                        
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">  

                        <input name="username" value="" class="validate-username form-control required invalid" size="30" required="required" aria-required="true" aria-invalid="true" type="text" placeholder="Username">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                                        
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">    

                        <input name="password" value="" autocomplete="off" class="validate-password form-control required invalid" size="30" maxlength="99" required="required" aria-required="true" aria-invalid="true" type="password" placeholder="Password">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>                                        
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">

                        <input name="password"value="" autocomplete="off" class="validate-password form-control required" size="30" maxlength="99" required="required" aria-required="true" aria-invalid="false" type="password" placeholder="Confirm Password">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>                                        
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">                    	
                        <input name="email" class="validate-email form-control required invalid" value="" size="30" autocomplete="email" required="required" aria-required="true" aria-invalid="true" type="email" placeholder="Email">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>                                        
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">                    	
                        <input name="confirmEmail" class="validate-email form-control required invalid" value="" size="30" required="required" aria-required="true" aria-invalid="true" type="email" placeholder="Confirm Email">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>                                        
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">                    	
                        <select name="type" class="form-control required" required="required" aria-required="true" aria-invalid="false">
                            <option value="" selected="selected">Select User Type</option>
                            <option value="Candidate">Candidate</option>
                            <option value="Agent">Agent</option>
                        </select>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-arrow-down"></i></span>                                        
                    </div> 
                        
                    <div style="margin-bottom: 25px" class="input-group">                    	
                        <input name="check" class="required" value="1" required="required" aria-required="true" type="checkbox" placeholder="">
                        By signing up for an account you agree to our 
                        <a data-toggle="modal" data-target="#myModal" class="btn text-uppercase ">Terms and Conditions</a>                                         
                    </div> 
                    </fieldset>
            		<br />

		            <div class="control-group">
		                <div class="controls">
		                    <button type="submit" class="btn btn-success validate" >
		                        Register                    
		                    </button>
		                    <a class="btn btn-primary" href="#" title="Cancel">
		                        Cancel                    
		                    </a>
		                </div>
		            </div>           
		        </form>
	    		</div>

			    <div class="col-md-6">
			    	<div class="clearfix"></div><br /><br /><br /><br /><br /><br />
			        <div class="col-md-11 pull-right" style="font-size:16px; line-height:28px;">

			            <span class="col-md-12 text-default">If you are an agent you must sign up to:</span>
			            <div class="clearfix"></div>

			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> Post your visa advertisements</span>
			            
			            <div class="clearfix"></div>
			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> Contact new candidates</span>
			            
			            <div class="clearfix"></div>
			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> Get updates</span>

			        	<div class="clearfix"></div><br />
			            
			            <span class="col-md-12 text-default">If you are a candidate you must sign up to:</span>
			            <div class="clearfix"></div>

			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> See many new visa offers</span>
			            
			            <div class="clearfix"></div>
			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> Apply for the visas</span>
			            
			            <div class="clearfix"></div>
			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> Contact visa agents</span>
			            
			            <div class="clearfix"></div>
			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> Get visas of any country</span>
			            
			            <div class="clearfix"></div>
			            <span class="col-md-12 text-default"> &nbsp; <span class="glyphicon glyphicon-info-sign text-default"></span> Get help when you are in abroad</span>
			       </div>         
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
							Registration	
						</span>
						<meta itemprop="position" content="14">
					</li>
				</ul>
				<!-- breadcrumb start -->
			</div>
			<div class="col-md-1"></div>
		</div>	
    </div>	
    @endsection
	
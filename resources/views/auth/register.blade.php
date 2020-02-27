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

					<form method="POST" action="{{ route('registation-post') }}" class="form-validate form-horizontal well" enctype="multipart/form-data">
					@csrf
                    <fieldset>

                    <h2 class="block-title">Sign Up</h2>

{{--                    <!--Facebook-->--}}
{{--                    <button type="button" class="btn btn-fb" style="background-color: #3B5998; color:#FFF;"><i class="fa fa-facebook left"></i> --}}
{{--                    </button>--}}
{{--                    <!--Twitter-->--}}
{{--                    <button type="button" class="btn btn-tw" style="background-color: #55ACEE; color:#FFF;" ><i class="fa fa-twitter left"></i> --}}
{{--                    </button>--}}
{{--                    <!--Google +-->--}}
{{--                    <button type="button" class="btn btn-gplus" style="background-color: #DD4B39; color:#FFF;"><i class="fa fa-google-plus left"></i> --}}
{{--                    </button>--}}
{{--                    <!--Linkedin-->--}}
{{--                    <button type="button" class="btn btn-li" style="background-color: #0082CA; color:#FFF;"><i class="fa fa-linkedin left"></i> --}}
{{--                    </button>--}}

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
                            <option value="2">Candidate</option>
                            <option value="1">Agent</option>
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
			   <div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content" style="width:900px;">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title text-success"><strong>OUR TERM AND CONDITIONS</strong></h4>
    </div>
    <div class="modal-body">
      <p class="text-default text-justify">You should know that <strong>visaexpertbd.com</strong> is just a media that connects a bridge between a visa candidate and a visa agent who process papers for visa. We are not a visa agent. Our work is: when you register on our site we give opportunities to see the visa offers that visa agents published on their pages. A candidate also can have a chance to apply for those visas and meet the agents physically.</p>
      <p class="text-default text-justify"><strong>WHY CANDIDATES TAKE THESE OPPORTUNITIES?</strong></p>
      <p class="text-default text-justify">A candidate, as he/she wishes to go abroad for job, study or immigration he searches online or on printed media for this type of opportunities. But they are unable to know how much he has to pay or what type of qualification he has to have, or where he has to go, or who he has to talk to. For bringing these information closer to the candidate <strong>visaexpertbd.com</strong> helps both parties to publish either their resume or advertisement very clearly and informatively. Both parties are now benefited from our site. We <strong>visaexpertbd.com</strong> are not involved in any of their (of both candidates and agents) work, meeting, responsibility, hassle, bargain, payment, payment related issues or legal procedure. </p>
      <p class="text-default text-justify"><strong>FOR CANDIDATE</strong></p>
      <p class="text-default text-justify">When a user is registered on our site as buyer he is called `candidate’. When a user is registered on our site as seller he is called `visa agent’. A candidate logs in on our site to see the visa offers and clicks the offers to take opportunity to apply for those visas. Apply does not mean he/she is applying to the visa authority (embassy/ consulate/ high commission). He/she applying to the visa agents who will process his/her papers and forward to the visa authority. <strong>visaexpertbd.com</strong> neither creates influences on them (candidates) to choose any of the published visa opportunities nor does it confirm them about visa security. Candidates himself choose any of the published visa opportunities and get appointments with the visa agents.</p>
      <p class="text-default text-justify">For security <strong>visaexpertbd.com</strong> does not publish the contact details of the candidate on site. An agent can only see the profile of the candidate without knowing his whereabouts and contact information. </p>
      <p class="text-default text-justify">A visa agent, according to the application of the candidate, will give an online appointment date and time. For security we also do not publish the agents contact details.</p>
      <p class="text-default text-justify">On the meeting date the candidate will appear physically at the agent’s office and discuss with him about the pros and cons of the visa opportunity.</p>
      <p class="text-default text-justify">If any candidate after making an appointment does not physically appear at the agents office or does not call us to cancel the appointment before the scheduled time or renew his/her appointment by calling us his profile will be down and access will be blocked.</p>
      <p class="text-default text-justify">If we notice if any agent is doing any illegal act with any candidate or doing anything against the society, state or government we will block his access that he cannot communicate with any of our candidates on our site.</p>
      <p class="text-default text-justify"><strong>visaexpertbd.com</strong> does not interfere into their (candidate and agent) discussion and does not have any profit in any of the decision they make about the further advancement.</p>
      <p class="text-default text-justify">After visa the candidate will pay to the agent.</p>
      <p class="text-default text-justify"><strong>visaexpertbd.com</strong> does not ever meet his candidate or agent physically for any purpose because it is not a visa agency or does not even need to meet or call his candidates or agents for any purpose. </p>
      <p class="text-default text-justify">Candidates will on his own responsibility meet the agent at the agents office, discuss, decide or advance for a future purpose.</p>
      <p class="text-default text-justify">After visa <strong>visaexpertbd.com</strong> will not take any responsibility of the candidate’s payment. If any candidate fails to pay his dues visa agents cannot put any load on <strong>visaexpertbd.com’s</strong> shoulder. For this reason agent will secure his processing with the candidate on stamp agreement or checks or other.</p>
      <p class="text-default text-justify">For any kind of loss of the agent or candidate regardless of economic, social, physical or mental <strong>visaexpertbd.com</strong> will not be liable.</p>
      <p class="text-default text-justify">Candidate & agent both can call us on our hotline showed on the site only for the seeking information on our service or procedure. We do not provide visa related information on phone except our site pages.</p>
      <p class="text-default text-justify">Please read carefully our services, terms and conditions before finally you register on our site. These terms and conditions are subject to change at any time and on any date without the prior notice to any of our candidates or agents or visitors.
</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
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

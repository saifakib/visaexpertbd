@extends('layouts.visa24.app')

@section('content')

<div id="content">
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- Contact Us start -->
				<div class="services block block-bg-gradient block-border-bottom ">
				    <div class="col-md-6">
				        <div class="contact-form">
				            <form action="{{ route('contact-us-post') }}" method="get" class="form-validate form-horizontal well">
	                        <fieldset>
                                @csrf
	                         <!--<legend></legend>-->
	                          <div class="form-group">
							    <label for="Name">Name *</label>
							    <input type="text" name="name" class="form-control" id="Name" placeholder="Name" required>
							  </div>

							  <div class="form-group">
							    <label for="Email">Email address *</label>
							    <input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
							  </div>

							  <div class="form-group">
							    <label for="Subject">Subject *</label>
							    <input type="text" name="subect" class="form-control" id="Subject" placeholder="Subject" required>
							  </div>

							  <div class="form-group">
							    <label for="Message">Message *</label>
							    <textarea name="message" class="form-control" rows="3" id="Message"></textarea>
							  </div>

							  <div class="form-group">
							  	<button type="submit" class="btn btn-primary">Send Message</button>
							  </div>

	                        </fieldset>
	            			</form>
	        			</div>
	     			</div>
				    <div class="col-md-6">
				        <div class="col-md-12" style="font-size:22px; line-height:40px;">
				            <span class="col-md-12 text-info"> Please contact our call centre at 01893759258 from 9 to 5 on all days except Friday and National holidays. Or fill in with what you want to say from below. Generally, we try to serve you instantly providing information. But if there is any holiday or on weekend we respond on next weekday. Take that, you send a message at 4.30 PM on Thursday; we will respond you on Saturday or Sunday. Please have patience. Don’t call repeatedly.</span>
				       </div>
					</div>
				</div>
				<!-- Contact Us end -->

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
							Contact Us
						</span>
						<meta itemprop="position" content="12">
					</li>
				</ul>
				<!-- breadcrumb start -->
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

@endsection

@extends('layouts.visa24.app')

@section('content') 

<div id="content">
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- visa offers start -->
				<div class="services block block-bg-gradient block-border-bottom">

					<!-- visa search form start -->
					<div class="col-md-12">

				    </div>
				    <!-- visa search form end -->

					<!-- visa 0ffers list start -->
					<div class="col-md-8">
				    	<h2 class="block-title">Apply Visa</h2>
				        <h4 class="text-success"><strong>নিচের ভিসার জন্য আবেদন করুন</strong>
				        </h4>
				        <div class="col-md-12 block-border" style="padding-left:0px !important; padding-right:0px !important;">
						    <div class="col-md-12 border-bottom-gray layout-pad">
				            	<div class="col-md-3">
				            	    <img src="assets/img/visaOffers/CHINA-TRANSLATOR.png" alt="" class="img-thumbnail" width="100" height="80"/>
				            	</div>
				                <div class="col-md-6">
				            	  <h4 class="text-uppercase text-bold"><strong>{{ $visa->title}}</strong>
				            	  </h4>
				                  <h5 class="text-uppercase text-success-custom"><strong>Agent {{ $visa->agentDetails->agent_name}}, {{ $visa->agentDetails->location}} , Country {{ $visa->offered_country}}, Cost {{ $visa->visa_payment}}। মেম্বার ডিসকাউন্ট {{ $visa->discount_visa24_clint}}%  {{ $visa->security_type}} </strong>
				                  </h5>
				            	</div>
				                <div class="col-md-3 text-right">
                                <form action="{{ route('applyVisaPost',$visa->visa_id)}}" method="get">
                                    @csrf
                                    <h5 class="text-default">Contact Number</h5>
                                    <input type="number" name="mobile"/>
				            	    <button type="submit" class="btn btn-sm btn-success-custom">Apply</a>
                                </form>

				            	</div>
				            </div>

				        </div>
				    </div>
				    <!-- visa 0ffers list end -->
				</div>
				<!-- visa offers end -->

				<!-- breadcrumb start -->
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li>
							You are here: &#160;
					</li>

					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="#" class="pathway"><span itemprop="name">Home</span></a>

							<span class="divider"></span>
								<meta itemprop="position" content="2">
					</li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
						<span itemprop="name">
							Visa Apply
						</span>
						<meta itemprop="position" content="2">
					</li>
				</ul>
				<!-- breadcrumb start -->
			</div>
			<div class="col-md-1"></div>
		</div>
    </div>
@endsection
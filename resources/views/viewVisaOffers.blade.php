
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

				    <!-- <form action="#" method="post" class="form-validate form-horizontal" >
				     <div class="row">
				     	<div class="col-md-3">
				         <span class="text-uppercase text-default" style="font-size:20px;"><strong>Find Visa Offers</strong>
				         </span>
				        </div>

				        <div class="col-md-3">
				         <input name="search_key" id="search_key" value="" class="form-control " placeholder="Visa type" aria-invalid="false" type="text">
				         <span class="text-default" style="font-size:10px; color:#999;">Visa type</span>
				        </div>

				        <div class="col-md-3">
				         <input name="search_location" id="search_location" value="" autocomplete="off" class="form-control " placeholder="Country" aria-invalid="false" type="text"  >
				         <span class="text-default" style="font-size:10px; color:#999;">Country</span>
				        </div>

				        <div class="col-md-3">
				         <button type="submit" class="validate btn btn-danger btn-block">
							FIND
						</button>
				        </div>
				     </div>
				    </form> -->

				    </div>
				    <!-- visa search form end -->

					<!-- visa 0ffers list start -->
					<div class="col-md-8">
				    	<h2 class="block-title">Visa Offers</h2>
				        <h4 class="text-success"><strong>নিচের ভিসা অফার ডিটেইলস দেখতে FIND MORE বাটনে ক্লিক করে ভেতরে যান ও ভিসার জন্য আবেদন করুন</strong>
				        </h4>
						@foreach($visas as $visa)
				        <div class="col-md-12 block-border" style="padding-left:0px !important; padding-right:0px !important;">
						    <div class="col-md-12 border-bottom-gray layout-pad">
				            	<div class="col-md-3">
				            	    <img src="{{ asset('assets/img/visaOffers/' . $visa->logo) }}" alt="" class="img-thumbnail" width="100" height="80" />
				            	</div>
				                <div class="col-md-6">
				            	  <h4 class="text-uppercase text-bold"><strong>{{ $visa->title}}</strong>
				            	  </h4>
				                  <h5 class="text-uppercase text-success-custom"><strong>Agent {{ $visa->agentDetails->agent_name}}, {{ $visa->agentDetails->location}} , Country {{ $visa->offered_country}}, Cost {{ $visa->visa_payment}}। মেম্বার ডিসকাউন্ট {{ $visa->discount_visa24_clint}}%  {{ $visa->security_type}} </strong>
				                  </h5>
				            	</div>
				                <div class="col-md-3 text-right">
				            	  <a href="{{ route('visaDetails', $visa->visa_id) }}" class="btn btn-sm btn-success-custom">FIND MORE</a>
				                  <h5 class="text-default">{{ $visa->created_at->diffForHumans()}} </h5>
				            	</div>
				            </div>

				        </div>
						@endforeach



				        <div class="col-md-12 text-center">
				   		 <ul class='pagination'>
				   		 	{{ $visas->links() }}
				   		 </ul>
				        </div>
				    </div>
				    <!-- visa 0ffers list end -->

				    <!-- visa offers side bar start -->

				    <div class="col-md-4">
				    	<h2 class="block-title">Featured Visa</h2>
						@if(isset($latest))
				        <div class="col-md-12 block-border">
				        	<h3 class="text-uppercase" style="font-weight:400; color:#666;">{{ $latest->title }}
				        	</h3>
				            <a href="{{ route('visaDetails', $latest->visa_id) }}" class="btn btn-sm btn-success-custom">FIND MORE</a>
				            <h5 class="text-uppercase text-default"><strong>Agent VA-01{{ $latest->agent->agent_id }}, {{ $latest->agent->location }}  , Country {{$latest->offered_country }}, Cost {{$latest->visa_payment }} {{ $latest->payment_system }} {{ $latest->security_type }}</strong>
				            </h5>
				            <p>{{ $latest->decription }}</p>
				        </div>
						@endif
				    </div>
				    <!-- visa offers side bar end -->
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
							Visa Offers
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

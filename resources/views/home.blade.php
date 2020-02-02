@extends('layouts.visa24.app')

@section('content')

    <!-- ======== Main content start ======== -->
    <div id="content"> 
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- visa offers start -->
				<div class="services block block-bg-gradient block-border-bottom m-b-20">
				
					<div class="col-md-12 m-b-20">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
							  <!-- Indicators -->
							<ol class="carousel-indicators">
							   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							   <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
								 <li data-target="#carousel-example-generic" data-slide-to="3"></li>
							   <li data-target="#carousel-example-generic" data-slide-to="4"></li>
								 <li data-target="#carousel-example-generic" data-slide-to="5"></li>
							   <li data-target="#carousel-example-generic" data-slide-to="6"></li>
								 <li data-target="#carousel-example-generic" data-slide-to="7"></li>
							</ol>

							  <!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
							   <div class="item active">
							      <img src="{{ asset('assets/img/slider/Australia.png') }}" style="height: 350px" alt="...">
							   </div>
							   <div class="item">
							     <img src="{{ asset('assets/img/slider/canada.png') }}" style="height: 350px" alt="...">
							   </div>
							   <div class="item">
							     <img src="{{ asset('assets/img/slider/Singapore.png') }}" style="height: 350px" alt="...">
							   </div>
								 <div class="item">
							      <img src="{{ asset('assets/img/slider/CAMBODIA.png') }}" style="height: 350px" alt="...">
							   </div>
							   <div class="item">
							     <img src="{{ asset('assets/img/slider/DohaQATAR.png') }}" style="height: 350px" alt="...">
							   </div>
							   <div class="item">
							     <img src="{{ asset('assets/img/slider/Turkey.png') }}" style="height: 350px" alt="...">
							   </div>
								 <div class="item">
							     <img src="{{ asset('assets/img/slider/MAKKA-MADINAH-1.png') }}" style="height: 350px" alt="...">
							   </div>
							   <div class="item">
							     <img src="{{ asset('assets/img/slider/Vietnam.png') }}" style="height: 350px" alt="...">
							   </div>
								
						    </div>
						</div>

							  <!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
				        </a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>

					<!-- visa search form start -->
					<div class="col-md-12 m-b-20">

				    <form action="#" method="#" class="form-validate form-horizontal" >
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
				    </form>
				         
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
				            	    <img src="public/assets/img/visaOffers/CHINA-TRANSLATOR.png" alt="" class="img-thumbnail" width="100" height="80"/>
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
				   		 	<li><a class='current'>1</a></li>
				   		 	<li><a href=''>2</a></li>
				   		 	<li><a href=''>3</a></li>
				   		 	<li><a href=''>4</a></li>
				   		 	<li><a href=''>5</a></li>
				   		 	<li><a href=''>6</a></li>
				   		 	<li><a href=''>7</a></li>
				   		 	<li><a href=''>Next</a></li>
				   		 	<li><a href=''>Last</a></li>
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
				

				<!-- visa categories start --> 
				<div class="services block block-bg-gradient block-border-bottom m-b-20">

					<h2 class="block-title">
					    Visa Categories
					</h2>

					<div class="row m-b-20">
                        @foreach($categorys as $category)
                            <div class="col-md-3 m-b-20">
                                <div class="myborder_radius">
                                    <a href="{{ route('categoryVisa', $category->category_id) }}" title="{{ $category->category_name }}">
                                        <img src="public/assets/img/visaCategories/{{ $category->image }}" border="0" alt="{{ $category->category_name }}" class="img-thumbnail" width="100" />
                                    </a>
                                    <p><a href="{{ route('categoryVisa', $category->category_id) }}" title="JOB VISA">{{ $category->category_name }}</a></p>
                                </div>
                            </div>
                        @endforeach

				    </div>
				</div>
				<!-- visa categories end --> 	

				<!-- Services start -->  
				<div class="services block block-bg-gradient block-border-bottom m-b-20">
				  <h2 class="block-title">
				    Our Services
				  </h2>
				  <div class="row">
				    <div class="col-md-4 text-center">
				      <span class="fa-stack fa-5x">
					      <a href="{{ route('extraOne')}}">
					      <img src="{{ asset('assets/img/services/tuxpi.com.1512485160.jpg') }}" border="0" /> 
					      </a>
				      </span>
				      <h4 class="text-weight-strong">
				        সাইন আপ করুন ও ভিসা নিন
				      </h4>
				      <p class="text-justify">আমাদের সবচেয়ে বড়ো সার্ভিসটি হলো আমরা টেকনাফ থেকে তেঁতুলিয়া পর্যন্ত বাংলাদেশের সকল ভিসা এজেন্টের সকল ভিসা অফার আমাদের সাইটে প্রদর্শন করি। একজন ভিসা প্রার্থী খুব সহজেই সেই সব ভিসা অফারে ক্লিক করে অফারগুলি গ্রহন করতে পারেন। এখন আপনাকে ভিসা এজেন্টের বিজ্ঞাপন অন্য কোথাও খুঁজতে হবেনা। খুঁজতে হবেনা কতো টাকা, কি শর্তে কোথায় কিভাবে ভিসা হবে আপনার, ভিসা হবার পরে নাকি আগে টাকা দিতে হবে, এজেন্টের অফিস কোথায়, কোথায় গিয়ে কার সাথে দেখা করবেন। এই সাইট থেকে আপনি নিজে নিজেই ভিসার আবেদন করতে পারবেন।</p>
				      <p>
				        <a href="{{ route('extraOne')}}" class="btn btn-more i-right">আরো জানুন <i class="fa fa-angle-right"></i></a>
				      </p>
				    </div>

				    <div class="col-md-4 text-center">
				      <span class="fa-stack fa-5x">
				      <a href="{{ route('extraTwo')}}">
				      <!--<i class="fa fa-circle fa-stack-2x text-primary"></i>
				      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>-->
				      <img src="{{ asset('assets/img/services/tuxpi.com.1512485918.jpg') }}" border="0" /> </a></span>
				      <h4 class="text-weight-strong">
				        ভিসার জন্য আমাদের সাহায্য নিন
				      </h4>
				      <p class="text-justify">ধরুন আপনি একা কিংবা ব্যস্ত। অথবা আপনি এই ধরনের কোন ঝামেলায় যেতে চাচ্ছেননা। এজেন্টের অফিসে যাওয়া, কথাবার্তা বলে শিডিউল করা, এজেন্ট কি বলতে চাইছে বা ভবিষ্যতে সে কি বলবে বা করতে পারবে তা আপনাকে বুঝতে হবে। তাছাড়া এজেন্টের সাথে কন্ট্রাক্ট সাইন করা ও নানা ধরনের কাজগুলো বুঝে করতে হয়। তাই আপনি এগুলো সরাসরি নিজে না করে আমাদের সাহায্য নিতে পারেন। আমরা আপনার হয়ে এজেন্টের সাথে কথাবার্তা বলবো। কন্ট্রাক্ট করবো। সব দায়িত্ব আমাদের। আমরা আপনার অবস্থানে থেকে আপনার হয়ে কাজ করবো। </p>
				      <p>
				        <a href="{{ route('extraTwo')}}" class="btn btn-more i-right">আরো জানুন <i class="fa fa-angle-right"></i></a>
				      </p>
				    </div>

				    <div class="col-md-4 text-center">
				      <span class="fa-stack fa-5x">
				      <a href="{{ route('extraThree')}}">
				      <!--<i class="fa fa-circle fa-stack-2x text-primary"></i>
				      <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>-->
				      <img src="{{ asset('assets/img/services/tuxpi.com.1512560973.jpg') }}" border="0" /> </a> </span>
				      <h4 class="text-weight-strong">
				        বিমান, হোটেল বুকিং ও প্যাকেজ ট্যুর
				      </h4>
				      <p class="text-justify">বিমানের টিকিং বুকিং, বিদেশের হোটেল বুকিং ও প্যাকেজ ট্যুর আমাদের অন্য সার্ভিসগুলির কয়েকটি। আপনি ইচ্ছে করলে বাইরের অন্যান্য ট্রাভেল এজেন্সিগুলো থেকে বেশী দামে বিমানের টিকিট না কিনে আমাদের সাহায্য নিতে পারেন। আমরা ভিসার পর বা ভিসার কাজ ছাড়াও বাইরের যে কোন ক্লায়েন্টের জন্য এই কাজগুলো করে দিতে পারি। এ জন্য আপনি আমাদের সাইটে সাইন আপ না করেও কেবল আমাদের মেইল করে বিস্তারিত জানিয়ে টিকিট ক্রয়, </p>
				      <p>
				        <a href="{{ route('extraThree')}}" class="btn btn-more i-right">আরো জানুন <i class="fa fa-angle-right"></i></a>
				      </p>
				    </div>
				  </div>
				</div>
				<!-- Services end --> 

				<!-- visa process start -->
	            <div class="services block block-bg-gradient block-border-bottom">
					<div class="item-page" itemscope itemtype="https://schema.org/Article">
			
						<div class="">
							<h2 class="block-title">
								কিভাবে আপনি ভিসা পাবেন			
							</h2>
						</div>
						
						<div itemprop="articleBody">
							<div dir="ltr">
								<div class="separator" style="clear: both; text-align: justify;"> </div>
								
								<span style="font-size: 12pt;"><img class="pull-left" style="float: left; margin-right: 10px; margin-bottom: 8px;" src="public/assets/img/visa.jpg" alt="" width="428" height="179" />
								<p>
									একটি সম্পুর্ন স্বাধীন প্রতিষ্ঠান। আমরা কোন ভিসা এজেন্সি নই। আমাদের সাথে সরাসরি অফিসে এসে আপনাদের সাক্ষাত করারও প্রয়োজন নেই।আমরা ভিসা প্রার্থী ও ভিসা এজেন্টের মাঝামাঝি একটি সেতুবন্ধ হিসাবে কাজ করি। আমাদের সব কার্যক্রম অনলাইন ভিত্তিক। আমাদের সাইটে যে সব অফারগুলো আপনি দেখছেন সেগুলো সবই আমাদের এজেন্টদের দেয়া অফার।
								</p>
								</span>

								<br />
								
								<div style="text-align: justify;">
									<span style="font-size: 12pt;">
									আমরা আমাদের দীর্ঘ অভিজ্ঞতার আলোকে প্রতিটি এজেন্টের অফিস ভিজিট করি ও তাদের কার্যক্রমের দিকে খেয়াল করি। তাদের কার্যক্রমের ভিত্তিতেই তাদেরকে আমরা ভেরিফায়েড এজেন্ট, সুবিধালভার এজেন্ট, গোল্ডেন এজেন্ট, ডায়মন্ড এজেন্ট হিসাবে চিহ্নিত করি। 
									</span>
								</div>

								<div style="text-align: justify;">
									<span style="font-size: 12pt;">
									আপনি যদি একজন ভিসা প্রার্থী হয়ে থাকেন তবে সবার আগে আমাদের ভিসা ক্লাবের মেম্বার হোন। ভিসা ক্লাব এর মেম্বার না হলে আপনি আমাদের নিকট থেকে কোন ভিসা তথ্য বা ভিসা সহায়তা নিতে পারবেন না। ভিসা ক্লাব এর মেম্বার হবার জন্য নিচের ছবিতে ক্লিক করুন 
									<a href="#"><img src="public/assets/img/download.png" alt="" width="99" height="88" style="margin-right: 8px; margin-bottom: 8px;" /></a> ভিসা ক্লাবের মেম্বার হবার পর আপনার প্রদেয় ইমেইল এ দুটি মেইল পাবেন। এবার মেইলে দেয়া আইডি ও পাসওয়ার্ড দিয়ে এই সাইটে লগ ইন করুন।তারপর আপনার ড্যাশবোর্ড থেকে POST A RESUME এ ক্লিক করে আপনার বায়োডাটা ফর্ম ফিলআপ করে রিজিউম আপলোড করুন ছবি সহ। এরপর প্রথম পেজ থেকে যে কোন ভিসা অফারের APPLY FOR THE VISA বাটন ক্লিক করে আবেদন করুন আপনার পছন্দসই ভিসাতে। এরপর  আবেদন করার পর আমরাই আপনার সাথে যোগাযোগ করবো।
									</span>
								</div>

								<div style="text-align: justify;">
									<span style="font-size: 12pt;">ভিসা অফারে যে খরচের কথা উল্লেখ করা আছে সেখানে ডিসকাউন্ট পেতে গেলে আপনাকে ভিসা ক্লাবের মেম্বার হতে হবে। ভিসা ক্লাবের মেম্বার হলে আপনি ৫০০০ টাকা থেকে ৫০,০০০ টাকা পর্যন্ত ডিসকাউন্ট পাবেন। আমাদের সম্পর্কে আরও জানার জন্য আমাদের ব্লগ সাইট <a href="http://www.visasforyou.blogspot.com">www.visasforyou.blogspot.com</a> এ যান। ভিসা ক্লাব এর এক বছরের মেম্বারশিপ 1000 (এক হাজার) টাকা ও ছয় মাসের মেম্বারশিপ 800 (আটশত) টাকা। মেম্বারশিপ ফর্মের ভেতর আমাদের বিকাশ মার্চেন্ট এ্যাকাউন্ট নাম্বার রয়েছে। ফর্ম পুরন শেষ করার আগেই আপনাকে বিকাশ করতে হবে ও ফর্মের শেষে TrxIDটি বসাতে হবে। কিংবা আপনার স্মার্ট মোবাইলে যদি বিকাশ এ্যাপ থাকে তবে ভিসা ক্লাব ফর্মের নিচে মার্চেন্ট কিউআর কোডটি আপনার বিকাশ এ্যাপ দিয়ে স্ক্যান করুন তারপর নির্দেশনা অনুসরন করুন। ভিসা আবেদন কিভাবে করবেন তা জানার জন্য <a href="/index.php/how-to-start-candidates">HOW TO START</a> অংশ দেখুন। ভিসায় আবেদন করার পর ভেরিফায়েড এজেন্ট আপনার রিজিউমটি দেখবেন এবং একটি উপযুক্ত সময়ে আপনাকে তার অফিসে যাবার জন্য বলবেন।একটি এ্যাপয়েন্টমেন্ট কার্ড পাঠানো হবে আপনার মেইলে।তারিখ ও সময় অনুযায়ী আপনি দেখা করবেন এজেন্টের সাথে এবং ভিসা প্রসেসিং শুরু করবেন।
									</span>
								</div>

								<div style="text-align: justify;">
									<span style="font-size: 12pt;">আমাদের মাধ্যমে ভিসা আবেদন করলে ভিসা হবার সম্ভাবনা ৯৯% কেননা এজেন্ট এর পাশাপাশি আমরাও এজেন্টের ভিসা প্রসেসিং কার্যক্রম তদারকি করে থাকি।
									</span>
								</div>
							</div> 	
						</div>
					</div>
				</div>
				<!-- visa process end -->
				
				<!-- breadcrumb start -->
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li>
						You are here: &#160;
					</li>
					
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
						<span itemprop="name">
							Home				
						</span>
						<meta itemprop="position" content="1">
					</li>
				</ul> 
				<!-- breadcrumb end -->                   
	        </div>
            <div class="col-md-1"></div>
        </div>
    </div>
     <!-- ======== main content end ======== -->
    
    <!-- ======== content area start ======== -->
    <div id="content">

				<!-- about company start -->
			<div class="mission text-justify block block-pd-sm block-bg-noise m-b-20">
					<div class="col-md-1"></div> 
					<div class="col-md-10"> 
						<h3 class="text-shadow-white" style="line-height: 40px;">
							বাংলার একটি ভিসা মার্কেটপ্লেস যেখানে শত শত ভিসার খোঁজ পাবেন আপনি। এই সমস্ত ভিসার ব্যপারে জানতে পারবেন এবং আবেদন করতে পারবেন। আমাদের রয়েছে দেশজোড়া অসংখ্য ভিসা এজেন্ট যারা বিভিন্ন দেশের বিভিন্ন ক্যাটাগরির ভিসা অফার আমাদের ওয়েব সাইটে নিয়ে আসছেন। এই সমস্ত ভিসা অফার থেকে আপনি আপনার পছন্দসই ভিসা অফারটি বেছে নিয়ে আবেদন করতে পারবেন। আমরা একটি সম্পুর্নভাবে স্বাধীন অনলাইনভিত্তিক প্রতিষ্ঠান। আমরা প্রতিদিন বিভিন্ন এজেন্টের ভিসা অফার পোস্টিং করার পাশাপাশি ভিসা প্রার্থীদেরকেও তাদের বায়োডাটা পোস্টিং করার সুবিধা দিয়ে থাকি। 
							<a href="{{ route('about-us') }}" class="btn btn-more btn"><i class="fa fa-plus"></i>আরো জানুন</a>
						</h3>  
				</div>
			</div>  
					<!-- about company end -->    
      
					<!--counter start-->
			<div class="block block-pd-sm block-bg-grey-dark block-bg-overlay block-bg-overlay-6 text-center" data-block-bg-img="public/assets/img/passport-world-map-hero-1400x500.jpg?q=40&amp;w=1650&amp;sharp=30" data-stellar-background-ratio="0.3">
				<h2 class="h-xlg h1 m-a-0">
					<span data-counter-up>1000</span>s
				</h2>
				<h3 class="h-lg m-t-0 m-b-lg">
					of Happy Visa Candidates!
				</h3>
				<p>
				@if(!Auth::user())
					<a href="{{ route('register')}}" class="btn btn-more btn-lg i-right">Join them today! <i class="fa fa-angle-right"></i></a>
				@endif
				</p>
			</div>  
					<!--counter end-->   
      
        <div class="mission text-justify block block-pd-sm ">
        	<div class="col-md-1"></div> 
        	<div class="col-md-10">        	
	        	<div class="col-md-6 m-b-lg">
	                <h3 class="block-title">
	                  Testimonials
	                </h3>
	                <img src="public/assets/img/man1.png" alt="রেজিস্ট্রেশন করুন, সিভি দিন ভিসা নিন">
	          	</div>
          
				<!-- Latest Blog posts start -->
				<div class="col-md-6 blog-roll">
				<h3 class="block-title">
				  Latest From Our Blog
				</h3>

				<!-- Blog post 1-->
				<div class="media">
				    <div class="media-left hidden-xs">
				    	<div class="date-wrapper"> 
				    		<span class="date-m">Jan</span> 
				    		<span class="date-d">01</span>
				    	</div>
				    </div>
					<div class="media-body">
							<h4 class="media-heading">
							  <a href="#" class="text-weight-strong">Under Contruction this blog</a>
							</h4>
					</div>    
				</div>

				          
				</div>
				<!-- Latest Blog posts end -->	
        	</div>
    	</div>  
    </div>	    
    <!-- ======== content area end ======== -->
@endsection
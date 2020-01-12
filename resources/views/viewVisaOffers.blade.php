
@extends('layouts.visa24.app')

@section('content')
    <div id="content"> 
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- visa offers start -->
				<div class="services block block-bg-gradient block-border-bottom">
				
					<div class="col-md-12 m-b-20">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							<ol class="carousel-indicators">
							   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							   <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>

							  <!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
                            <div class="item active">
							      <img src="{{ asset('assets/img/slider/Australia.jpg') }}" alt="...">
							   </div>
							   <div class="item">
							     <img src="{{ asset('assets/img/slider/canada.jpg') }}" alt="...">
							   </div>
							   <div class="item">
							     <img src="{{ asset('assets/img/slider/Singapore 8.jpg') }}" alt="...">
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
					<div class="col-md-12">

				    <form action="#" method="post" class="form-validate form-horizontal" >
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

				        <div class="col-md-12 block-border" style="padding-left:0px !important; padding-right:0px !important;">
						    <div class="col-md-12 border-bottom-gray layout-pad">
				            	<div class="col-md-3">
				            	    <img src="assets/img/visaOffers/CHINA-TRANSLATOR.png" alt="" class="img-thumbnail" width="100" height="80"/>			                    
				            	</div>
				                <div class="col-md-6">
				            	  <h4 class="text-uppercase text-bold"><strong>চিনা অনুবাদক ও ইন্টারপ্রেটর জব ভিসা</strong>
				            	  </h4>
				                  <h5 class="text-uppercase text-success-custom"><strong>Agent VA-0101, Dhaka , Country China, Cost ৩ লক্ষ টাকা। মেম্বার ডিসকাউন্ট ১৫০০০ টাকা। REF-HAQ-IBBU </strong>
				                  </h5>
				            	</div>
				                <div class="col-md-3 text-right">
				            	  <a href="offersViewDetails.html" class="btn btn-sm btn-success-custom">FIND MORE</a>
				                  <h5 class="text-default">Posted 21 Hours ago </h5>
				            	</div>
				            </div>	

				            <div class="col-md-12 border-bottom-gray layout-pad">
				            	<div class="col-md-3">
				            	    <img src="assets/img/visaOffers/CHINA-JOB7.png" alt="" class="img-thumbnail" width="100" height="80"/>			                    
				            	</div>
				                <div class="col-md-6">
				            	  <h4 class="text-uppercase text-bold"><strong>চায়না মোবাইল কোম্পানীর কোয়ালিটি কন্ট্রোলার জব</strong>
				            	  </h4>
				                  <h5 class="text-uppercase text-success-custom"><strong>Agent VA-0101, DHAKA  , Country China, Cost ৩ লক্ষ টাকা। মেম্বার ডিসকাউন্ট ২৫০০০ টাকা। REF-HAQ-IBBU </strong>
				                  </h5>
				            	</div>
				                <div class="col-md-3 text-right">
				            	  <a href="#" class="btn btn-sm btn-success-custom2">FIND MORE</a>
				                  <h5 class="text-default">Posted 4 Days ago </h5>
				            	</div>
				            </div>	
		
							<div class="col-md-12 border-bottom-gray layout-pad">
				            	<div class="col-md-3">
				            	    <img src="assets/img/visaOffers/CHINA-TRANSLATOR.png" alt="" class="img-thumbnail" width="100" height="80"/>			                    
				            	</div>
				                <div class="col-md-6">
				            	  <h4 class="text-uppercase text-bold"><strong>চিনা অনুবাদক ও ইন্টারপ্রেটর জব ভিসা</strong>
				            	  </h4>
				                  <h5 class="text-uppercase text-success-custom"><strong>Agent VA-0101, Dhaka , Country China, Cost ৩ লক্ষ টাকা। মেম্বার ডিসকাউন্ট ১৫০০০ টাকা। REF-HAQ-IBBU </strong>
				                  </h5>
				            	</div>
				                <div class="col-md-3 text-right">
				            	  <a href="#" class="btn btn-sm btn-success-custom">FIND MORE</a>
				                  <h5 class="text-default">Posted 21 Hours ago </h5>
				            	</div>
				            </div>	

				            <div class="col-md-12 border-bottom-gray layout-pad">
				            	<div class="col-md-3">
				            	    <img src="assets/img/visaOffers/CHINA-JOB7.png" alt="" class="img-thumbnail" width="100" height="80"/>			                    
				            	</div>
				                <div class="col-md-6">
				            	  <h4 class="text-uppercase text-bold"><strong>চায়না মোবাইল কোম্পানীর কোয়ালিটি কন্ট্রোলার জব</strong>
				            	  </h4>
				                  <h5 class="text-uppercase text-success-custom"><strong>Agent VA-0101, DHAKA  , Country China, Cost ৩ লক্ষ টাকা। মেম্বার ডিসকাউন্ট ২৫০০০ টাকা। REF-HAQ-IBBU </strong>
				                  </h5>
				            	</div>
				                <div class="col-md-3 text-right">
				            	  <a href="#" class="btn btn-sm btn-success-custom2">FIND MORE</a>
				                  <h5 class="text-default">Posted 4 Days ago </h5>
				            	</div>
				            </div>		
				        </div>
				        

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
				        <div class="col-md-12 block-border">
				        	<h3 class="text-uppercase" style="font-weight:400; color:#666;">কানাডা ওয়ার্কপারমিট ভিসা (ঢাকা থেকে)
				        	</h3>
				            <a href="offersViewDetails.html" class="btn btn-sm btn-success-custom">FIND MORE</a>
				            <h5 class="text-uppercase text-default"><strong>Agent VA-0101, Dhaka  , Country Canada, Cost ১২ লক্ষ টাকা ভিসার পর REF-MIJ-TI5L</strong>
				            </h5>
				            <p>এটি একটি পরীক্ষামূলক সংযোজন। প্রচুর চাহিদার প্রেক্ষিতে আমরা কিছু সংখ্যক কানাডা ওয়ার্ক পারমিট ও জব ভিসার কাজ করতে যাচ্ছি। শুধুমাত্র যারা ২০ বছর বয়স থেকে ৪৫ বছর বয়সের মধ্যে আছে ও এসএসসি পাশ তারাই এই ভিসার জন্য আবেদন করুন। সর্বোচ্চ সময় ৩ মাস ১৫ দিন। ঢাকা ভিএসএস এ আপনি নিজের হাতে পেপার জমা দেবেন ও তুলবেন। ভিসা হলে পেমেন্ট করতে হবে। সেক্ষেত্রে সরকারীভাবে ম্যানপাওয়ার হবে এবং স্মার্ট কার্ড পাওয়ার পরই ফ্লাই করবেন। 
							</p>
				        </div>   
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
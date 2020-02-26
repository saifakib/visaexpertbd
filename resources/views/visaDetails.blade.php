@extends('layouts.visa24.app')

@section('content')

    <div id="content">
        <div class="mission block block-pd-sm block-bg-noise">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- offers View Details start -->
                <div class="services block block-bg-gradient block-border-bottom">
                    <h2 class="block-title">Visa Offer Details</h2>
                    <h5 class="text-info">Contact details of Agent is not shown which will only be visible to you after
                        Agent shortlist you</h5>
                    <div class="col-md-9">
                        <span class="col-md-3 text-uppercase text-default"><strong>Logo</strong></span>
                        <span class="col-md-9 text-uppercase text-default">
				        	<img src="{{ asset('assets/img/visaOffers/'.
				        	$visa->logo) }}" alt=""
                                 class="img-thumbnail" width="100" height="80"/>
                        </span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-uppercase text-default"><strong>Agent Name</strong></span>
                        <span
                            class="col-md-9 text-uppercase text-default"><strong>{{ $visa->agentDetails->agent_name}}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-uppercase text-default"><strong>Agent Location</strong></span>
                        <span
                            class="col-md-9 text-uppercase text-default"><strong>{{ $visa->agentDetails->location }} </strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-uppercase text-info"><strong>Agent Offer</strong></span>
                        <span class="col-md-9 text-uppercase text-info"><strong>{{ $visa->title}}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-uppercase text-default"><strong>offered country</strong></span>
                        <span class="col-md-9 text-uppercase text-default"><strong>{{ $visa->offered_country }}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>visa type</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{ $visa->category->category_name }}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>visa authority</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>{{ $visa->visa_authority }}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>salary per month</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{ $visa->per_month_salary }}</strong></span>
                        <div class="clearfix"></div>


                        <span class="col-md-3 text-capitalize text-default"><strong>contract for years</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{$visa->contact_years}}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>processing time</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{$visa->processing_time}}  </strong></span>
                        <div class="clearfix"></div>

                        <span
                            class="col-md-3 text-capitalize text-default"><strong>full amount of payment</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{$visa->visa_payment}} </strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>initial payment</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>No</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>state candidates age limit</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>{{$visa->age_limit}}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>state candidates education</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>{{$visa->education}}</strong></span>
                        <div class="clearfix"></div>

                        <span
                            class="col-md-3 text-capitalize text-default"><strong>state candidates result</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>প্রয়োজন নেই।     </strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>language</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>{{$visa->language}} </strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>language test result</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>{{$visa->language_test}}  </strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>study gap</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{$visa->study_gap}} </strong></span>
                        <div class="clearfix"></div>

                        <span
                            class="col-md-3 text-capitalize text-default"><strong>discount for visaexpert clients</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>Yes</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>payment system</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>{{ $visa->payment_system}}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>security type</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{$visa->security_type}}</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>possibility of visa</strong></span>
                        <span
                            class="col-md-9 text-capitalize text-default"><strong>{{$visa->visa_possible_rate}} %</strong></span>
                        <div class="clearfix"></div>

                        <span class="col-md-3 text-capitalize text-default"><strong>describe this visa</strong></span>
                        <span class="col-md-9 text-capitalize text-default"><strong>{{ $visa->decription}}</strong>
						</span>
                    </div>

                    <div class="col-md-3">
                        <div class="col-md-12 block-border">
                            <h4 class="text-uppercase text-bold" style="color:#666"><strong>Overview</strong></h4>
                            <p><span class="glyphicon glyphicon-calendar text-info"></span> Date Posted
                                <br/>{{ $visa->created_at->diffForHumans() }}</p>
                            <p><span class="glyphicon glyphicon-stats text-info"></span> VISA
                                Title<br/>{{ $visa->title }}</p>
                            <p><span class="glyphicon glyphicon-map-marker text-info"></span> VISA
                                Location<br/>{{$visa->offered_country }}</p>
                            <p><span class="glyphicon glyphicon-usd text-info"></span> Rate<br/>{{ $visa->visa_payment}}
                            </p>
                            <p><span class="glyphicon glyphicon-map-marker text-info"></span> Agent
                                Location<br/>{{$visa->agentDetails->location }}</p>
                            <a href="{{ route('applyVisa',$visa->visa_id)}}" class="btn btn-info btn-lg text-uppercase"
                               style="margin-left:-8px;">Apply for this visa</a>
                            <div class="clearfix"></div>
                            &nbsp;
                        </div>
                    </div>

                    <div class="clearfix">&nbsp;</div>
                    <br/><br/>


                    @foreach($visas as $visa)
                        <div class="col-md-6">
                            <div class="col-md-12 block-border pull-left">
                                <br/>
                                <span class="col-md-12 text-uppercase text-default border-bottom-gray"><strong>Others offer of this agent</strong>
				    	</span>
                                <div class="clearfix"></div>

                                <span class="col-md-6 text-uppercase text-info"><strong>visa offer name</strong></span>
                                <span class="col-md-6 text-uppercase text-info"><strong>
				        	<a href="#">{{ $visa->title }}</a></strong>
				        </span>
                                <div class="clearfix"></div>

                                <span class="col-md-6 text-uppercase text-default"><strong>Agent Name</strong></span>
                                <span
                                    class="col-md-6 text-uppercase text-default"><strong>{{ $visa->agent->agent_name }}</strong></span>
                                <div class="clearfix"></div>

                                <span
                                    class="col-md-6 text-uppercase text-default"><strong>offered country</strong></span>
                                <span
                                    class="col-md-6 text-uppercase text-default"><strong>{{$visa->offerd_country}}</strong></span>
                                <div class="clearfix"></div>

                                <span class="col-md-6 text-capitalize text-default"><strong>visa type</strong></span>
                                <span
                                    class="col-md-6 text-capitalize text-default"><strong>{{ $visa->category->category_name }}</strong></span>
                                <div class="clearfix"></div>

                                <span
                                    class="col-md-6 text-capitalize text-default"><strong>visa authority</strong></span>
                                <span
                                    class="col-md-6 text-capitalize text-default"><strong>{{$visa->visa_authority}}</strong></span>
                                <div class="clearfix"></div>

                                <span
                                    class="col-md-6 text-capitalize text-default"><strong>full amount of payment</strong></span>
                                <span class="col-md-6 text-capitalize text-default"><strong>{{ $visa->visa_payment }} মেম্বার ডিসকাউন্ট {{ $visa->discount_visa24_clint }}% </strong></span>
                                <div class="clearfix"></div>
                                <br/>
                            </div>
                        </div>
                    @endforeach

                    <br/>&nbsp;

                    <!--social media icons-->
                    <div class="navbar-text social-media social-media-inline pull-right">
                        <!--@todo: replace with company social media details-->
                        <a href="{{ $media[1]->social_medial_link }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $media[0]->social_medial_link }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="{{ $media[2]->social_medial_link }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="{{ $media[3]->social_medial_link }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <!-- offers View Details end -->

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
							View Visa Offer Details
						</span>
                        <meta itemprop="position" content="15">
                    </li>
                </ul>
                <!-- breadcrumb start -->
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection

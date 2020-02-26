@extends('layouts.visa24.app')
@section('content')

    <div id="content">
        <div class="mission block block-pd-sm block-bg-noise">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <!--<div class="container">   -->
                <!-- Begin Content -->


                <div id="system-message-container">
                </div>

                <div class="services block block-bg-gradient block-border-bottom ">
                    <h2 class="block-title">Candidates Resume Details</h2>
                    <div class="col-md-12 bg-success">
                        <div class="col-md-4">
                            <h2 class="text-info text-uppercase"><strong>{{ $candidate->full_name }} </strong></h2>
                        </div>
                        <div class="col-md-8">
                            <h3 class="text-default text-uppercase"><strong>{{ $candidate->candidateDetails->present_location }}, {{ $candidate->candidateDetails->language }}  , Choice - {{ $candidate->candidateDetails->country_apply }}, Budget - {{ $candidate->candidateDetails->budget }}</strong></h3>
                        </div>
                    </div>
                    <div class="clr"><br />&nbsp;</div>
                    <div class="col-md-12 bg-basic">
                        <div class="col-md-6 ">
                            <div class="col-md-12 bg-info border-info-radius">
                                <h3 class="text-success"><strong>Bio</strong></h3>
                                <h5 class="text-default" style="line-height:18px;">{{ $candidate->candidateDetails->present_location }}</h5>
                            </div>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Date of Birth:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->DOB  }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Occupation:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->occupation }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>sector:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->sector }} </strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Status:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong></strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Location:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->present_location }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>ANY EXTRA QUALIFICATION:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->extra_qualification }}  </strong></h5>

                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>PRESENTLY IN JOB:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{$candidate->candidateDetails->presently_in_job}}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>job sector:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->sector }}</strong></h5>
                            <div class="clearfix"></div>


                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>did you have a job in past?:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->job_experience }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>designation / post:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->designation }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>joining date:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->joining_date }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>AREA OF SKILL:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->skill }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>LANGUAGE KNOWN:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->language }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>LANGUAGE result:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>    </strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>which country you want to apply:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->country_apply }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>which visa you need:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->visa_need }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>do you have any visa on your passport:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->visa_on_passport }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>how many visas:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->visa_no_passport }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>type of visas:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->visa_type }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>expiry date of your passport:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->expired_passport_date }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>your budget:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->budget }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>EDUCATION:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->education }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Comments about EDUCATION:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->education_comment }}</strong></h5>
                            <div class="clearfix"></div>



                        </div>
                        <div class="col-md-6 border-left-dotted">
                            <div class="col-md-12 bg-info border-info-radius">
            <span class="col-md-6">
			<img src="{{ asset('assets/img/candidate/'.$candidate->candidateDetails->candidate_image) }}" alt="" class="img-thumbnail" width="180"/></a>            </span>
                                <span class="col-md-6"><br />

            </span>
                                <span class="col-md-6"><br />

            </span>
                            </div>

                            <div class="clearfix"></div><br />

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>school name:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->school_name }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>ssc/ o-level/ madrasa result:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->school_result }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>ssc/ o-level/ madrasa group:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->school_group }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>ssc/ o-level/ madrasa passing year:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->school_passing_year }}</strong></h5>
                            <div class="clearfix"></div>

{{--                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>ssc/ o-level/ madrasa scanned document:</strong></h5>--}}
{{--                            <h5 class="col-md-6 text-default"><strong>--}}
{{--                                    <a href="http://visa24bd.com/images/ssc/IMG-20190929-WA0005.jpg" target="_blank">IMG-20190929-WA0005.jpg</a></strong></h5>--}}
{{--                            <div class="clearfix"></div>--}}


                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>college name:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->college_name }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>hsc/ a-level/ madrasa result:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->college_result }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>hsc/ a-level/ madrasa group:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong></strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>hsc/ a-level/ madrasa passing year:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->college_passing_year }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>university name:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->university_name }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>bachalor result:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->university_result }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>bachalor/ honours subject:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong></strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>bachalor/ honours passing year:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->university_passing_year }}</strong></h5>
                            <div class="clearfix"></div>

                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>university name:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong>{{ $candidate->candidateDetails->university_name }}</strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>masters result:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong></strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>masters subject:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong></strong></h5>
                            <div class="clearfix"></div>
                            <h5 class="col-md-6 text-uppercase text-success text-right"><strong>masters passing year:</strong></h5>
                            <h5 class="col-md-6 text-default"><strong></strong></h5>
                            <div class="clearfix"></div>



                        </div>


                    </div>

                </div>


                <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                    <li>
                        You are here: &#160;
                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="/" class="pathway"><span itemprop="name">Home</span></a>

                        <span class="divider">
											</span>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
				<span itemprop="name">
					Candidates Resume Details				</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>

                <!-- End Content -->
                <!--</div>  -->
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection

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
                    <h2 class="block-title">Visa Agents Details</h2>

                    <div class="col-md-12 bg-success">
                        <div class="col-md-4">
                            <h2 class="text-info text-uppercase"><strong>VA-01{{ $agent->agent_id }} </strong></h2>
                        </div>
                        <div class="col-md-8">
                            <h3 class="text-default text-uppercase"><strong>{{ $agent->agentDetails->location }}</strong></h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <!--<h4 class="col-md-12 text-uppercase text-success">
                    <img src="/images/htoagent.png" border="0" class="img-thumbnail" />
                    </h4>-->


                    <h5 class="col-md-2 text-uppercase text-success text-right"><strong>Status:</strong></h5>
                    <h5 class="col-md-10 text-default"><strong>Diamond Agents  &nbsp; <img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" /><img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" /><img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" /><img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" /></strong></h5>

                    <div class="clearfix"></div>
                    <h5 class="col-md-2 text-uppercase text-success text-right"><strong>Companys Details:</strong></h5>
                    <h5 class="col-md-10 text-default"><strong>{{ $agent->agentDetails->details }}.</strong></h5>
                    <div class="clearfix"></div>
                    <h5 class="col-md-2 text-uppercase text-success text-right"><strong>MP / TRADE LICENSE:</strong></h5>
                    <h5 class="col-md-10 text-default"><strong>{{ $agent->agentDetails->licence }}</strong></h5>
                    <div class="clearfix"></div>


                    <h4 class="col-md-12 text-uppercase text-success">
                        <a href="/view-visa-offers/showallvisaofferss.html?agentid=1" title="VA-0101" class="btn btn-success col-md-3">
                            view offers
                        </a>
                    </h4>
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
					Agent Details				</span>
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

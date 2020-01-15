@extends('layouts.visa24.app')

@section('content')
    <div id="content">
        <div class="mission block block-pd-sm block-bg-noise">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- visa agent start -->
                <div class="services block block-bg-gradient block-border-bottom ">
                    <h2 class="block-title">Visa Agents</h2>
                    <div class="col-md-12">
                        <!-- agent start -->
                        @foreach($agents as $agent)
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <div class="myborder_radius_gray">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#" title="">
                                                <img src="{{ url('assets/img/visaAgent/'.$agent->agentDetails->logo) }}" border="0" alt="" class="img-thumbnail" width="100" />
                                            </a>
                                        </div>
                                        <div class="col-md-9">
{{--                                            <h4 class="text-primary">--}}
{{--                                                <span class="text-one">Title</span> &nbsp;--}}
{{--                                                <img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" />--}}
{{--                                                <img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" />--}}
{{--                                                <img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" />--}}
{{--                                                <img src="{{ asset('assets/img/visaAgent/golden.png') }}" border="0" width="35" class="img-thumbnail2" />--}}
{{--                                            </h4>--}}

                                            <h4 class="text-default">
                                                {{ $agent->agentDetails->location }}
                                            </h4>

                                            <h5 class="text-default">
                                                {{ $agent->agentDetails->title }}
                                            </h5>

                                            <h4 class="text-danger">
                                                <a href="{{ route('agentVisa', $agent->agent_id) }}" title="" class="btn btn-success col-md-3">
                                                    view offers
                                                </a>
                                                <a href="{{ route('visaAgent', $agent->agent_id) }}" title="" class="btn btn-primary col-md-3 pull-right">
                                                    view details
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="clr"><br />&nbsp;</div>
                </div>
                <!-- visa agent end -->

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
							Visa Agent
						</span>
                        <meta itemprop="position" content="7">
                    </li>
                </ul>
                <!-- breadcrumb start -->
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection

@extends('layouts.visa24.app')

@push('css')
<style>
		.padding{
			padding-top:15px;
		}
        .link{
            font-size : 20px;
        }
</style>
@endpush

@section('content')

<div id="content"> 
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- Contact Us start -->
				<div class="services block block-bg-gradient block-border-bottom ">     
				    <div class="col-md-3 padding">
                        @include('layouts.visa24.agent.sidebar')
	     			</div>
				    <div class="col-md-9">
                        @yield('agentc')       
					</div>   
				</div>
				<!-- Contact Us end -->
			</div>
			<div class="col-md-1"></div>
		</div>	
	</div>

@endsection
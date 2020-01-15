@extends('layouts.visa24.app')

@section('content')

    <div id="content">
    	<div class="mission block block-pd-sm block-bg-noise">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
				<!-- visa categories start -->
				<div class="services block block-bg-gradient block-border-bottom">

					<h2 class="block-title">
					    Visa Categories
					</h2>

				    <div class="row m-b-20">
                        @foreach($categorys as $category)
                            <div class="col-md-3 m-b-20">
                                <div class="myborder_radius">
                                    <a href="{{ route('categoryVisa', $category->category_id) }}" title="{{ $category->category_name }}">
                                        <img src="assets/img/visaCategories/{{ $category->image }}" border="0" alt="{{ $category->category_name }}" class="img-thumbnail" width="100" />
                                    </a>
                                    <p><a href="{{ route('categoryVisa', $category->category_id) }}" title="JOB VISA">{{ $category->category_name }}</a></p>
                                </div>
                            </div>
                        @endforeach

				    </div>
				</div>
				<!-- visa categories end -->

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
							Visa Category
						</span>
						<meta itemprop="position" content="3">
					</li>
				</ul>
				<!-- breadcrumb start -->
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

@endsection
offersViewDetails.html

@extends('layouts.visa24.app')

@section('content')

    <div id="content">
        <div class="mission block block-pd-sm block-bg-noise">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div id="system-message-container"></div>
                <div class="services block block-bg-gradient block-border-bottom">
                    <h1>Posts</h1>

                    <div class="blogfactory-posts" style="overflow: hidden;">

                        @foreach($blogs as $blog)
                            <div class="blogfactory-post" style="margin-bottom: 100px;">
                                <div class="blogfactory-post-title" style="margin-bottom: 10px">
                                    <a style="font-size: 20px; font-weight: bold;" href="{{ route('singlePost', $blog->post_id) }}">{{ $blog->title }}</a>
                                </div>

                                <div class="blogfactory-post-info">
                                    <span class="blogfactory-post-info-item">
                                        <a href="#" style="margin-left: 5px;"><i class="fas fa-clock"></i>{{ $blog->created_at->diffForHumans() }}</a>
                                    </span>
                                </div>

                                <div class="blogfactory-post-content">
                                    <p class="separator" style="text-align: justify;" data-blogger-escaped-style="clear: both; text-align: center;"><a href="" data-blogger-escaped-style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img style="float: left; padding-right: 20px;" src="{{ asset('assets/img/blog/' . $blog->image) }}" width="235" height="320" border="0" data-blogger-escaped-data-original-height="498" data-blogger-escaped-data-original-width="366" /></a></p>
                                    <div data-blogger-escaped-style="text-align: justify;">
                                        <p style="text-align: justify;"><span style="font-size: x-large;" data-blogger-escaped-style="font-size: large;"/>{!! $blog->body !!}  </p>
                                    </div>
                                    <div data-blogger-escaped-style="text-align: justify;">
                                        <p> </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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
					Blog				</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ul>

                <!-- End Content -->
                <!--</div>  -->
            </div>
        </div>
    </div>
@endsection

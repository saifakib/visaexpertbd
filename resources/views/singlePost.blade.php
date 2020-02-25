@extends('layouts.visa24.app')

@section('content')
    <div id="content">
        <div class="mission block block-pd-sm block-bg-noise">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div id="system-message-container">
                </div>
                <div class="services block block-bg-gradient block-border-bottom">
                    <div class="page-header">
                        <h1>{{ $post->title }}</h1>
                    </div>
                    <div class="post-content">
                        <p class="separator" style="text-align: justify;" data-blogger-escaped-style="clear: both; text-align: center;"><a href="https://4.bp.blogspot.com/--vxPNo4dDHA/W2FIVlN4ouI/AAAAAAAAal0/JjhvgkGldHMg18zItjgQWpRKmvvvBbawQCLcBGAs/s1600/CANADA.png" data-blogger-escaped-style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"><img style="float: left;" src="https://4.bp.blogspot.com/--vxPNo4dDHA/W2FIVlN4ouI/AAAAAAAAal0/JjhvgkGldHMg18zItjgQWpRKmvvvBbawQCLcBGAs/s320/CANADA.png" width="235" height="320" border="0" data-blogger-escaped-data-original-height="498" data-blogger-escaped-data-original-width="366" /></a></p>
                        <div data-blogger-escaped-style="text-align: justify;">
                            <p style="text-align: justify;">{!! $post->body !!}</p>
                        </div>
                        <div data-blogger-escaped-style="text-align: justify;">
                            <p> </p>
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

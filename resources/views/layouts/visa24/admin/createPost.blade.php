@extends('layouts.visa24.admin.control')

@section('admin')
    <div class="col-md-12" style="font-size:22px; line-height:40px;">

        <h2 class="block-title">
            Create Post
        </h2>
        <form method="GET" action="{{ route('admin.postBlog') }}" enctype="multipart/form-data">
            @csrf
            <div class="row ">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Post Title</label>
                                    <input type="text" id="title" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group form-float">

                                <label for="image">Featured Image</label>
                                <input type="file"name="image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form method="post">
                                <textarea id="body" name="body"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <button type="submit" style="float: right; margin-top: 10px;" class="btn btn-primary waves-effect">SUBMIT</button>
        </form>
    </div>

@endsection()

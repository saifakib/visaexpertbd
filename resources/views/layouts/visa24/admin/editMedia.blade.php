@extends('layouts.visa24.admin.control')

@section('admin')

    @extends('layouts.visa24.admin.control')

@section('admin')
    <div class="col-md-12" style="font-size:22px; line-height:40px;">

        <h2 class="block-title">
            Update Media
        </h2>
        <form method="PUT" action="{{ route('admin.updateMedia', $media->media_id) }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Social Media Name</h5>
                        <div class="col-md-8">
                            <input type="text"  value="{{ $media->social_medial_name }}" class="form-control col-md-8 text-left" readonly>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group row">
                        <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Social Media Address</h5>
                        <div class="col-md-8">
                            <input type="text" name="media_link" value="{{ $media->social_medial_link }}" class="form-control col-md-8 text-left">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <button type="submit" style="margin-left:280px;" class="btn btn-primary waves-effect">Update</button>
                </div>
            </div>
        </form>

    </div>

@endsection()


@endsection

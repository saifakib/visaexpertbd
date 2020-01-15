@extends('layouts.visa24.admin.control')

@section('admin')

@extends('layouts.visa24.admin.control')

@section('admin')
 <div class="col-md-12" style="font-size:22px; line-height:40px;">

                                <h2 class="block-title">
                                    Update Visa Category
                                </h2>
                                <form method="PUT" action="{{ route('admin.updateCategory', $category->category_id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Category Name</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="category_name" value="{{ $category->category_name }}"  class="form-control col-md-8 text-left" id="category_name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="logo" class="col-form-label col-md-3 text-uppercase text-success text-left">Category Image</h5>
                                                <div class="col-md-8">
                                                    <input type="file" name="image"  class=" col-md-8 text-left" id="image">
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

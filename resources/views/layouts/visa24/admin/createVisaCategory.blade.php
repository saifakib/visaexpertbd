@extends('layouts.visa24.admin.control')

@section('admin')
 <div class="col-md-12" style="font-size:22px; line-height:40px;">

                                <h2 class="block-title">
                                    Create Visa
                                </h2>
                                <form method="POST" action="{{ route('admin.postVisaCategory') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Category Name</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="category_name"  class="form-control col-md-8 text-left" id="category_name">
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
                                            <button type="submit" style="margin-left:280px;" class="btn btn-primary waves-effect">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

 @endsection()

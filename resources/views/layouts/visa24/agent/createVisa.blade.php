@extends('layouts.visa24.agent.control')

@section('agentc')
 <div class="col-md-12" style="font-size:22px; line-height:40px;">

                                <h2 class="block-title">
                                    Post A Visa
                                </h2>
                                <form method="GET" action="{{ route('agent.postVisa') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <h5 for="username" class="col-form-label col-md-3 text-uppercase text-success text-left">Category</h5>
                                                <div class="col-md-8">
                                                    <select name="category" class="form-control">
                                                        @foreach($categories as $category)
                                                        {
                                                            <option value="{{ $category->category_id }}">{{ $category->category_name}}</option>
                                                        }
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <h5 class="col-form-label col-md-3 text-uppercase text-success text-left">Visa Authority</h5>
                                                <div class="col-md-8">
                                                <select name="visa_authority" class="form-control">

                                                    <option value="Public">Public</option>
                                                    <option value="Private">Private</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="clearfix"></div>
                                            <div class="form-group row">
                                                <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Visa Title</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="title" class="form-control col-md-8 text-left" id="full_name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>





                                            <div class="form-group row">
                                                <h5 for="title" class="col-form-label col-md-3 text-uppercase text-success text-left">Offered Country</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="offered_country" class="form-control col-md-8 text-left" id="title">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Per Month Salary</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="per_month_salary"  class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="details" class="col-form-label col-md-3 text-uppercase text-success text-left">Contact Years</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="contact_years" class="form-control col-md-8 text-left" id="license">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="license" class="col-form-label col-md-3 text-uppercase text-success text-left">Processing Time</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="processing_time"  class="form-control col-md-8 text-left" id="license">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Visa Payment</h5>
                                                <div class="col-md-8">
                                                    <input type="number" name="visa_payment" class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Age Limit</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="age_limit" class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Education</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="education"  class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="clearfix"></div>
                                            <div class="form-group row">
                                                <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Language </h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="language"  class="form-control col-md-8 text-left" id="full_name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="license" class="col-form-label col-md-3 text-uppercase text-success text-left">Language Test</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="language_test"  class="form-control col-md-8 text-left" id="license">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="username" class="col-form-label col-md-3 text-uppercase text-success text-left">Study Gap</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="study_gap"  class="form-control col-md-8 text-left" id="username">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="agent_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Discount Visaexpert Clint</h5>
                                                <div class="col-md-8">
                                                    <input type="number" name="discount_visa24_clint"  class="form-control col-md-8 text-left" id="agent_name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="title" class="col-form-label col-md-3 text-uppercase text-success text-left">Payment System</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="payment_system"  class="form-control col-md-8 text-left" id="title">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="title" class="col-form-label col-md-3 text-uppercase text-success text-left">Security Type</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="security_type"  class="form-control col-md-8 text-left" id="title">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="title" class="col-form-label col-md-3 text-uppercase text-success text-left">Visa Possible</h5>
                                                <div class="col-md-8">
                                                    <input type="number" name="visa_possible"  class="form-control col-md-8 text-left" id="title">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="details" class="col-form-label col-md-3 text-uppercase text-success text-left">Description</h5>
                                                <div class="col-md-8">
                                                    <textarea name="decription" id="details"  class="form-control col-md-8 text-left" cols="30" rows="05"></textarea>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="logo" class="col-form-label col-md-3 text-uppercase text-success text-left">Logo</h5>
                                                <div class="col-md-8">
                                                    <input type="file" name="logo"  class=" col-md-8 text-left" id="logo">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="submit" style="margin-left:280px;" class="btn btn-primary waves-effect">POST</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

 @endsection()

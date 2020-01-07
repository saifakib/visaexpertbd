@extends('layouts.visa24.agent.control')

@section('agentc')
 <div class="col-md-12" style="font-size:22px; line-height:40px;">   
                            
                                <h2 class="block-title">
                                    Visa Agent Profile Update		
                                </h2>
                                <form method="GET" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="2"/>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group row">
                                            <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Full Name</h5>
                                            <div class="col-md-8">
                                                <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control col-md-8 text-left" id="full_name">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>   

                                        <div class="form-group row">
                                            <h5 for="username" class="col-form-label col-md-3 text-uppercase text-success text-left">User Name</h5>
                                            <div class="col-md-8">
                                                <input type="text" name="username" value="{{ $user->username }}" class="form-control col-md-8 text-left" id="username">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>  
                                        
                                        <div class="form-group row">
                                            <h5 for="agent_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Agent Name</h5>
                                            <div class="col-md-8">
                                                <input type="text" name="agent_name" value="" class="form-control col-md-8 text-left" id="agent_name">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>   

                                        <div class="form-group row">
                                            <h5 for="title" class="col-form-label col-md-3 text-uppercase text-success text-left">Agent Title</h5>
                                            <div class="col-md-8">
                                                <input type="text" name="title" value="" class="form-control col-md-8 text-left" id="title">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>   

                                        <div class="form-group row">
                                            <h5 for="details" class="col-form-label col-md-3 text-uppercase text-success text-left">Details</h5>
                                            <div class="col-md-8">
                                                <textarea name="deatils" id="details" value="" class="form-control col-md-8 text-left" cols="30" rows="05"></textarea>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>   

                                        <div class="form-group row">
                                            <h5 for="license" class="col-form-label col-md-3 text-uppercase text-success text-left">License</h5>
                                            <div class="col-md-8">
                                                <input type="text" name="license" value="" class="form-control col-md-8 text-left" id="license">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>   

                                        <div class="form-group row">
                                            <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Location</h5>
                                            <div class="col-md-8">
                                                <input type="text" name="location" value="" class="form-control col-md-8 text-left" id="location">
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
                                        
                                        <button type="submit" class="btn btn-primary waves-effect">SUBMIT</button>

                                        </div>
                                    </div>
                                </form>
                                
                            </div>
				         
 @endsection()
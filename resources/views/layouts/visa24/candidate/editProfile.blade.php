@extends('layouts.visa24.agent.control')

@section('agentc')
 <div class="col-md-12" style="font-size:22px; line-height:40px;">

                                <h2 class="block-title">
                                    Candidate Profile Update
                                </h2>
                                <form method="GET" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->user_id }}"/>
                                    <div class="row">
                                        <div class="col-md-6">
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
                                                <h5 for="agent_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Occupation</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="occupation" value="{{ $user->candidateDetails->DOB }}" class="form-control col-md-8 text-left" id="agent_name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="title" class="col-form-label col-md-3 text-uppercase text-success text-left">Present Job</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="presently_in_job" value="{{ $user->candidateDetails->presently_in_job }}" class="form-control col-md-8 text-left" id="title">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Sector</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="sector" value="{{ $user->candidateDetails->sector }}" class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="details" class="col-form-label col-md-3 text-uppercase text-success text-left">Job Experience</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="job_experience" value="{{ $user->candidateDetails->job_experience }}" class="form-control col-md-8 text-left" id="license">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="license" class="col-form-label col-md-3 text-uppercase text-success text-left">Skill</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="skill" value="{{ $user->candidateDetails->skill }}" class="form-control col-md-8 text-left" id="license">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Apply Visa</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="visa_need" value="{{ $user->candidateDetails->visa_need }}" class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Visa On Passport</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="visa_on_passport" value="{{ $user->candidateDetails->visa_on_passport }}" class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <h5 for="location" class="col-form-label col-md-3 text-uppercase text-success text-left">Visa Type</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="visa_type" value="{{ $user->candidateDetails->visa_type }}" class="form-control col-md-8 text-left" id="location">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group row">
                                                <h5 for="full_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Expired Passport Date</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="expired_passport_date" value="{{ $user->candidateDetails->expired_passport_date }}" class="form-control col-md-8 text-left" id="full_name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="license" class="col-form-label col-md-3 text-uppercase text-success text-left">Country Apply</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="country_apply" value="{{ $user->candidateDetails->country_apply }}" class="form-control col-md-8 text-left" id="license">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="username" class="col-form-label col-md-3 text-uppercase text-success text-left">Budget</h5>
                                                <div class="col-md-8">
                                                    <input type="number" name="budget" value="{{ $user->candidateDetails->expired_passport_date }}" class="form-control col-md-8 text-left" id="username">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="agent_name" class="col-form-label col-md-3 text-uppercase text-success text-left">Present Location</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="present_location" value="{{ $user->candidateDetails->present_location }}" class="form-control col-md-8 text-left" id="agent_name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="title" class="col-form-label col-md-3 text-uppercase text-success text-left">Permanent Location</h5>
                                                <div class="col-md-8">
                                                    <input type="text" name="permanent_location" value="{{ $user->candidateDetails->permanent_location }}" class="form-control col-md-8 text-left" id="title">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="details" class="col-form-label col-md-3 text-uppercase text-success text-left">Education</h5>
                                                <div class="col-md-8">
                                                    <textarea name="education" id="details" value="{{ $user->candidateDetails->education }}" class="form-control col-md-8 text-left" cols="30" rows="05"></textarea>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group row">
                                                <h5 for="logo" class="col-form-label col-md-3 text-uppercase text-success text-left">Candidate Image</h5>
                                                <div class="col-md-8">
                                                    <input type="file" name="candidate_image"  class=" col-md-8 text-left" id="candidate_image">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="submit" style="margin-left:280px;" class="btn btn-primary waves-effect">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

 @endsection()

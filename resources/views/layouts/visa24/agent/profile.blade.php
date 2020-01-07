 @extends('layouts.visa24.agent.control')

 @section('agentc')
 <div class="col-md-12" style="font-size:22px; line-height:40px;">   
                            
                                <h2 class="block-title">
                                    Profile		
                                </h2>
                                <h5 style="color:red; text-align: right;"><a href="{{ route('editProfile', $user->user_id) }}">Edit Profle</a></h5>
                                <div class="row">
                                
                                    <div class="col-md-5">
                                    <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Name:</strong></h5>

                                    <h5 class="col-md-6 text-default"><strong>{{ $user->full_name}}</strong></h5>
                                    <div class="clearfix"></div>   

                                    <h5 class="col-md-6 text-uppercase text-success text-right"><strong>User Name:</strong></h5>
                                    <h5 class="col-md-6 text-default"><strong>{{ $user->username }}</strong>
                                    </h5>
                                    <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Email:</strong></h5>
                                    <h5 class="col-md-6 text-default"><strong>{{ $user->email }}</strong></h5>
                                    <div class="clearfix"></div>

                                    <h5 class="col-md-6 text-uppercase text-success text-right"><strong>Registation Date:</strong></h5>
                                    <h5 class="col-md-6 text-default"><strong>{{ $user->created_at }} </strong></h5>
                                    <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
				         
 @endsection()
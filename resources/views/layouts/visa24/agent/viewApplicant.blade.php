@extends('layouts.visa24.agent.control')

@section('agentc')
    <div class="col-md-12" style="font-size:22px; line-height:40px;">

        <h2 class="block-title">
            Visa Applicant List
        </h2>
        <section class="content">
            <div class="container-fluid">
                <!-- Exportable Table -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Offered Country</th>
                                            <th>Contact Number</th>
                                            <th>Apply Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($applies as $key=>$apply)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $apply->visa->offered_country}}</td>
                                                <td>{{ $apply->mobile}}</td>
                                                <td>{{ $apply->apply_date}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('agent.deleteApplicant',$apply->apply_id)}}"
                                                       class="btn btn-danger waves-effect">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Exportable Table -->
            </div>
        </section>
    </div>
@endsection

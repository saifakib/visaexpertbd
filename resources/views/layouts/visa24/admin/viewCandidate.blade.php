@extends('layouts.visa24.admin.control')

@section('admin')
<div class="col-md-12" style="font-size:22px; line-height:40px;">

    <h2 class="block-title">
        Visa Candidate List
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
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>Visa Type</th>
                                            <th>Amount</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($candidates as $key=>$candidate)
                                        <tr>
                                            <td>{{ $candidate->candidate_id }}</td>
                                            <td>{{ $candidate->full_name}}</td>
                                            <td>{{ $candidate->country_apply}}</td>
                                            <td>{{ $candidate->visa_type }}</td>
                                            <td>{{ $candidate->budget }}</td>
                                            <td class="text-center">
                                                <a href="{{route('candidateResumeDetails',$candidate->user_id)}}"
                                                class="btn btn-info waves-effect">
                                                <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{route('admin.deleteCandidate',$candidate->user_id)}}"
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


@extends('layouts.visa24.admin.control')

@section('admin')
<div class="col-md-12" style="font-size:22px; line-height:40px;">

    <h2 class="block-title">
        Visa Agent List
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
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($agents as $key=>$agent)
                                        <tr>
                                            <td>{{ $agent->agent_id }}</td>
                                            <td>{{ $agent->agent_name}}</td>
                                            <td>{{ $agent->title}}</td>
                                            <td>{{ $agent->location }}</td>
                                            <td class="text-center">
                                                <a href="{{route('visaAgent',$agent->agent_id)}}"
                                                class="btn btn-info waves-effect">
                                                <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{route('admin.deleteAgent',$agent->user_id)}}"
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


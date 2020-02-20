@extends('layouts.visa24.admin.control')

@section('admin')
    <div class="col-md-12" style="font-size:22px; line-height:40px;">

        <h2 class="block-title">
            Contacts
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
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Subject</th>
                                            <th class="text-center">Message</th>
                                            <th class="text-center">Time</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contacts as $key=>$contact)
                                            <tr>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email}}</td>
                                                <td>{{ $contact->subject }}</td>
                                                <td>{{ $contact->message }}</td>
                                                <td>{{ $contact->created_at->diffForHumans() }}</td>
                                                <td class="text-center">
                                                    <a href="{{route('admin.deleteContact',$contact->contact_id)}}"
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


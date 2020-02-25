@extends('layouts.visa24.admin.control')

@section('admin')
    <div class="col-md-12" style="font-size:22px; line-height:40px;">

        <h2 class="block-title">
            Visa Blog Posts
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
                                            <th>Title</th>
                                            <th>Created at</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogs as $key=>$blog)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $blog->title}}</td>
                                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                                <td class="text-center">
{{--                                                    <a href="{{route('admin.editPost',$blog->post_id)}}"--}}
{{--                                                       class="btn btn-info waves-effect">--}}
{{--                                                        <i class="material-icons">edit</i>--}}
{{--                                                    </a>--}}
                                                    <a href="{{route('admin.deletePost',$blog->post_id)}}"
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


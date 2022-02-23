@extends('admin.admin_master')

{{-- {{data}} --}}

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                        <div class="box-header with-border">
                        <h3 class="box-title">Designations Table</h3>
                        <a href="{{route('designation.show_create_form')}}" class="btn btn-success" style="float: right">Add Designation</a>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designations as $key => $designation)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$designation['name']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-danger" href="{{route("designation.delete",$designation['id'])}}"><i class="ti-trash"></i></a>
                                                    <a class="btn btn-success" href="{{route("designation.edit",$designation['id'])}}"><i class="ti-pencil-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

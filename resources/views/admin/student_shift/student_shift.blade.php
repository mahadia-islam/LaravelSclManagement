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
                        <h3 class="box-title">Student Shift Table</h3>
                        <a href="{{route('student_shift.show_create_form')}}" class="btn btn-success" style="float: right">Add Shift</a>
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
                                    @foreach ($student_shifts as $student_shift)
                                        <tr>
                                            <td>{{$student_shift['id']}}</td>
                                            <td>{{$student_shift['name']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-danger" href="{{route("student_shift.delete",$student_shift['id'])}}"><i class="ti-trash"></i></a>
                                                    <a class="btn btn-success" href="{{route("student_shift.edit",$student_shift['id'])}}"><i class="ti-pencil-alt"></i></a>
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

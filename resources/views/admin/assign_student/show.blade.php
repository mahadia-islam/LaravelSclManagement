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
                        <h3 class="box-title">{{$assign_students[0]['student_class']['name']}}</h3>
                        <a href="{{route('assign_student.show_create_form')}}" class="btn btn-success" style="float: right">Assign Student</a>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Student Name</th>
                                        <th>Student Class</th>
                                        <th>Student Group</th>
                                        <th>Student Shift</th>
                                        <th>Student Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assign_students as $key => $assign_student)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$assign_student['student']['name']}}</td>
                                            <td>{{$assign_student['student_class']['name']}}</td>
                                            <td>{{$assign_student['student_group']['name']}}</td>
                                            <td>{{$assign_student['student_shift']['name']}}</td>
                                            <td>{{$assign_student['student_year']['name']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-danger" href="{{route("assign_student.delete",$assign_student['id'])}}"><i class="ti-trash"></i></a>
                                                    <a class="btn btn-success" href="{{route("assign_student.edit",$assign_student['id'])}}"><i class="ti-pencil-alt"></i></a>
                                                    <a class="btn btn-danger" href="{{route("assign_student.pdf_generate",$assign_student['id'])}}"><i class="ti-eye"></i></a>
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

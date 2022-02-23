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
                        <h3 class="box-title">Assign Student Table</h3>
                        <a href="{{route('assign_student.show_create_form')}}" class="btn btn-success" style="float: right">Assign Student</a>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Classes</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assign_students as $key => $assign_student)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$assign_student['student_class']['name']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-info" href="{{route("assign_student.show",$assign_student['student_class']['id'])}}"><i class="ti-eye"></i></a>
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

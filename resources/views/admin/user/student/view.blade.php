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
                        <h3 class="box-title">Student Table</h3>
                        <a style="float: right" href="{{route('user_student.show_create_form')}}" class="btn btn-info">Add Student</a>
                        <a style="float: right" href="{{route('user_student.generate_pdf')}}" class="btn btn-warning">Generate Pdf</a>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Religion</th>
                                        <th>Gender</th>
                                        <th>Id No</th>
                                        <th>Code</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $key => $student)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$student['name']}}</td>
                                            <td>0{{$student['mobile']}}</td>
                                            <td>{{$student['religion']}}</td>
                                            <td>{{$student['gender']}}</td>
                                            <td>{{$student['id_no']}}</td>
                                            <td>{{$student['code']}}</td>
                                            <td>{{$student['address']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-danger" href="{{route('user_student.delete',$student['id'])}}"><i class="ti-trash"></i></a>
                                                    <a class="btn btn-success" href="{{route('user_student.edit',$student['id'])}}"><i class="ti-pencil-alt"></i></a>
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

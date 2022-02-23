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
                        <h3 class="box-title">{{$assign_subjects[0]['student_class']['name']}}</h3>
                        <a href="{{route('assign_subject.show_create_form')}}" class="btn btn-success" style="float: right">Add Fee Category</a>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Student Class</th>
                                        <th>Student Subject</th>
                                        <th>Full Mark</th>
                                        <th>Pass Mark</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($assign_subjects as $key => $assign_subject)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$assign_subject['student_class']['name']}}</td>
                                            <td>{{$assign_subject['student_subject']['name']}}</td>
                                            <td>{{$assign_subject['full_mark']}}</td>
                                            <td>{{$assign_subject['pass_mark']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-danger" href="{{route("assign_subject.delete",$assign_subject['id'])}}"><i class="ti-trash"></i></a>
                                                    <a class="btn btn-success" href="{{route("assign_subject.edit",$assign_subject['id'])}}"><i class="ti-pencil-alt"></i></a>
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

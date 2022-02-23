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
                        <h3 class="box-title">Assign Subject Table</h3>
                        <a href="{{route('assign_subject.show_create_form')}}" class="btn btn-success" style="float: right">Assign Subject</a>
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
                                    @foreach ($assign_subjects as $key => $assign_subject)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$assign_subject['student_class']['name']}}</td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-warning" href="{{route("assign_subject.show",$assign_subject['student_class']['id'])}}"><i class="ti-eye"></i></a>
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

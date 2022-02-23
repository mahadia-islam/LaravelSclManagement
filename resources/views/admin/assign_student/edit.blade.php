@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update Assign Student</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('assign_student.update',$assign_student['id'])}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
                                <div class="input-group mb-3">
                                    <select name="student_id" id="" class="form-control">
                                        <option value="{{$assign_student['student']['id']}}">{{$assign_student['student']['name']}}</option>
                                        @foreach ($students as $student)
                                            <option value="{{$student['id']}}">{{$student['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
								<div class="input-group mb-3">
									<select name="student_class_id" id="" class="form-control">
                                        <option value="{{$assign_student['student_class']['id']}}">{{$assign_student['student_class']['name']}}</option>
                                        @foreach ($student_classes as $student_cls)
                                            <option value="{{$student_cls['id']}}">{{$student_cls['name']}}</option>
                                        @endforeach
                                    </select>
									<select name="student_group_id" id="" class="form-control">
                                        <option value="{{$assign_student['student_group']['id']}}">{{$assign_student['student_group']['name']}}</option>
                                        @foreach ($student_groups as $student_grp)
                                            <option value="{{$student_grp['id']}}">{{$student_grp['name']}}</option>
                                        @endforeach
                                    </select>
								</div>
								<div class="input-group mb-3">
									<select name="student_year_id" id="" class="form-control">
                                        <option value="{{$assign_student['student_year']['id']}}">{{$assign_student['student_year']['name']}}</option>
                                        @foreach ($student_years as $student_yr)
                                            <option value="{{$student_yr['id']}}">{{$student_yr['name']}}</option>
                                        @endforeach
                                    </select>
									<select name="student_shift_id" id="" class="form-control">
                                        <option value="{{$assign_student['student_shift']['id']}}">{{$assign_student['student_shift']['name']}}</option>
                                        @foreach ($student_shifts as $student_sft)
                                            <option value="{{$student_sft['id']}}">{{$student_sft['name']}}</option>
                                        @endforeach
                                    </select>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<input type="submit" class="btn btn-rounded btn-primary btn-outline" value="Update">
						</div>
					</form>
				  </div>
				  <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

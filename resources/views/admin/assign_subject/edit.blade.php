@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update Assign Subject</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('assign_subject.update',$assign_subject['id'])}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<div class="input-group mb-3">
									<select name="student_class_id" id="" class="form-control">
                                        <option value="{{$student_class['id']}}">{{$student_class['name']}}</option>
                                        @foreach ($student_classes as $student_cls)
                                            <option value="{{$student_cls['id']}}">{{$student_cls['name']}}</option>
                                        @endforeach
                                    </select>
								</div>
								<div class="input-group mb-3">
									<select name="student_subject_id" id="" class="form-control">
                                        <option value="{{$student_subject['id']}}">{{$student_subject['name']}}</option>
                                        @foreach ($student_subjects as $student_sbj)
                                            <option value="{{$student_sbj['id']}}">{{$student_sbj['name']}}</option>
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

@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-12 col-12">
				  <div class="box">
					<!-- /.box-header -->
					<form class="form" action="{{route('assign_subject.create')}}" method="POST">
                        @csrf
						<div class="box">
                            <div class="box-header with-border">
                            <h4 class="box-title">Assign Subject To Class</h4>
                            </div>
                            <div class="box-body form-element">
                            <div class="add_item">
                                <div class="row my-4">
                                    <div class="col-sm-10">
                                    <select name="student_class_id" id="" class="form-control">
                                        <option value="">Select Class</option>
                                        @foreach ($student_classes as $student_class)
                                            <option value="{{$student_class['id']}}">{{$student_class['name']}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-sm-10">
                                    <select name="student_subject_id[]" id="" class="form-control">
                                        <option value="">Select Subject</option>
                                        @foreach ($student_subjects as $student_subject)
                                            <option value="{{$student_subject['id']}}">{{$student_subject['name']}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-sm-2 d-flex">
                                        <span class="btn btn-info addEventMore"><i class="fa fa-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
						<!-- /.box-body -->
						<div class="box-footer">
							<input type="submit" class="btn btn-rounded btn-success">
						</div>
					</form>
				  </div>
				  <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
</div>
<div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">

            <div class="row form_row my-4">
                <div class="col-sm-10">
                <select name="student_subject_id[]" id="" class="form-control" >
                    <option value="">Select Class</option>
                    @foreach ($student_subjects as $student_subject)
                        <option value="{{$student_subject['id']}}">{{$student_subject['name']}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-sm-2 d-flex">
                    <span class="btn btn-info addEventMore"><i class="fa fa-plus"></i></span>
                    <span class="btn btn-danger mx-2 removeEvent"><i class="fa fa-minus"></i></span>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

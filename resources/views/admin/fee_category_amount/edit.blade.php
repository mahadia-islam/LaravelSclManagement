@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update Student Shift</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('fee_category_amount.update',$fee_category_amount['id'])}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Student Name" name="amount" value="{{$fee_category_amount['amount']}}">
								</div>
								<div class="input-group mb-3">
									<select name="student_class_id" id="" class="form-control">
                                        <option value="{{$student_class['id']}}">{{$student_class['name']}}</option>
                                        @foreach ($student_classes as $student_cls)
                                            <option value="{{$student_cls['id']}}">{{$student_cls['name']}}</option>
                                        @endforeach
                                    </select>
								</div>
								<div class="input-group mb-3">
									<select name="fee_category_id" id="" class="form-control">
                                        <option value="{{$fee_category['id']}}">{{$fee_category['name']}}</option>
                                        @foreach ($fee_categories as $fee_cat)
                                            <option value="{{$fee_cat['id']}}">{{$fee_cat['name']}}</option>
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

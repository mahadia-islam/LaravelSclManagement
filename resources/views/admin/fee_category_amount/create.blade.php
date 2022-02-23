@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-12 col-12">
				  <div class="box">
					<!-- /.box-header -->
					<form class="form" action="{{route('fee_category_amount.create')}}" method="POST">
                        @csrf
						<div class="box">
                            <div class="box-header with-border">
                            <h4 class="box-title">Add Fee Amount</h4>
                            </div>
                            <div class="box-body form-element">
                            <div class="add_item">
                                <div class="row my-4">
                                    <div class="col-sm-5">
                                    <select name="fee_category_id" id="" class="form-control">
                                        <option value="">Select Fee Category</option>
                                        @foreach ($fee_categories as $fee_category)
                                            <option value="{{$fee_category['id']}}">{{$fee_category['name']}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-sm-5">
                                    <select name="student_class_id[]" id="" class="form-control">
                                        <option value="">Select Class</option>
                                        @foreach ($student_classes as $student_class)
                                            <option value="{{$student_class['id']}}">{{$student_class['name']}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="Amount" name="amount[]">
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
                <div class="col-sm-5">
                <select name="student_class_id[]" id="" class="form-control" >
                    <option value="">Select Class</option>
                    @foreach ($student_classes as $student_class)
                        <option value="{{$student_class['id']}}">{{$student_class['name']}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-sm-5">
                <input type="text" class="form-control" placeholder="Amount" name="amount[]">
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

@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update Student Year</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('student_year.update',$student_year['id'])}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<label>Student Name</label>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ti-student"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Student Name" name="name" value="{{$student_year['name']}}">
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

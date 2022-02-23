@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update Subject</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('student_subject.update',$student_subject['id'])}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Student Name" name="name" value="{{$student_subject['name']}}">
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

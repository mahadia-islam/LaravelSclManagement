@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update Password</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" method="POST" action="{{route('user.update_password')}}">
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="Current password" name="current_password">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="New Password" name="password">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="Confirm password" name="confirm_password">
								</div>
							</div>
                            <div class="form_group">
                                <div class="input_group">
                                    <input type="submit" class="btn btn-rounded btn-info" value="Update">
                                </div>
                            </div>
						</div>
						<!-- /.box-body -->
					</form>
				  </div>
				  <!-- /.box -->
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-6 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update User</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('user.update',$user['id'])}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<label>User Name</label>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ti-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Username" name="name" value="{{$user['name']}}">
								</div>
							</div>
							<div class="form-group">
								<label>Email address</label>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ti-email"></i></span>
									</div>
									<input type="email" class="form-control" placeholder="Email" name="email" value="{{$user['email']}}">
								</div>
							</div>
							<div class="form-group">
								<label>User Role</label>
								<div class="input-group mb-3">
									<select name="role" id="role" class="form-control">
                                        <option {{($user['role'] == 'admin') ? 'selected' : null}} value="admin">Admin</option>
                                        <option {{($user['role'] == 'user') ? 'selected' : null}} value="user">User</option>
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

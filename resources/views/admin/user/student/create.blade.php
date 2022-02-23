@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-12 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Add Student</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('user_student.create')}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
                                <div class="form_group">
                                    <x-jet-validation-errors class="mb-4" style="color:rgb(223, 55, 55)"/>
                                </div>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Username" name="name">
                                    <div class="mx-5"></div>
									<input type="email" class="form-control" placeholder="Email" name="email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="Password" name="password">
                                    <div class="mx-5"></div>
									<input type="text" class="form-control" placeholder="Religion" name="religion">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<select name="gender" id="" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <div class="mx-5"></div>
                                    <input type="text" class="form-control" placeholder="Address" name="address">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Date of Birth" name="dob">
                                    <div class="mx-5"></div>
                                    <input type="text" class="form-control id_no" placeholder="Id No" name="id_no">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
                                    <input type="text" class="form-control random_code" placeholder="Code" name="code">
                                    <div class="mx-5"></div>
                                    <input type="text" class="form-control" placeholder="Mobile" name="mobile">
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
@endsection

@extends('admin.admin_master')

@section('content')
<div class="content-wrapper">
	<div class="container-full">
        <section class="content">
			<div class="row">
                <div class="col-lg-8 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Update Student</h4>
					</div>
					<!-- /.box-header -->
					<form class="form" action="{{route('user_student.update',$student['id'])}}" method="POST">
                        @csrf
						<div class="box-body">
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Student Name" name="name" value="{{$student['name']}}">
                                    <div class="mx-5"></div>
									<input type="text" class="form-control" placeholder="Student Email" name="email" value="{{$student['email']}}">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="password" class="form-control" placeholder="Student Password" name="password" value="{{$student['password']}}">
                                    <div class="mx-5"></div>
									<input type="text" class="form-control" placeholder="Student Mobile" name="mobile" value="0{{$student['mobile']}}">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Student Id No" name="id_no" value="{{$student['id_no']}}">
                                    <div class="mx-5"></div>
									<input type="text" class="form-control" placeholder="Student Address" name="address" value="{{$student['address']}}">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="Student Religion" name="religion" value="{{$student['religion']}}">
                                    <div class="mx-5"></div>
									<input type="text" class="form-control" placeholder="Student Date of Birth" name="dob" value="{{$student['dob']}}">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<select name="gender" class="form-control">
                                        <option {{($student['gender'] == 'male') ? 'selected' : null}} value="male">Male</option>
                                        <option {{($student['gender'] == 'female') ? 'selected' : null}} value="female">Female</option>
                                    </select>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<input type="submit" class="btn btn-rounded btn-info" value="Update">
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

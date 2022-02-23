@extends('admin.admin_master')

{{-- {{data}} --}}

@section('content')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                    <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
					  <div class="flexbox px-20 pt-20">
						<label class="toggler toggler-danger text-white">
						  <input type="checkbox">
						  <i class="fa fa-heart"></i>
						</label>
						<div class="dropdown">
						  <a data-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-white"></i></a>
						  <div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
							<a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> Shots</a>
							<a class="dropdown-item" href="#"><i class="ti-check"></i> Follow</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"><i class="fa fa-ban"></i> Block</a>
						  </div>
						</div>
					  </div>

					  <div class="box-body text-center pb-50">
						<a href="#">
                            @if ($user['profile_photo_path'])
                                <img class="avatar avatar-xxl avatar-bordered" src="../images/avatar/5.jpg" alt="">
                            @else
                                <img class="avatar avatar-xxl avatar-bordered" src="{{asset("backend/images/avatar/avatar-10.png")}}" alt="">
                            @endif
						</a>
						<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{$user['name']}}</a></h4>
					  </div>

					  <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
						<li>
						  <span class="opacity-60">{{$user['email']}}</span>
						</li>
						<li>
						  <span class="opacity-60">{{$user['role']}}</span>
						</li>
						<li>
						  <a class="btn btn-info btn-sm" href="{{route("user.edit",$user['id'])}}">update</a>
						</li>
					  </ul>
					</div>
                </div>
            </section>
        </div>
    </div>
@endsection

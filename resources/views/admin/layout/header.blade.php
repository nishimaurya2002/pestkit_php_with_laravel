<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{url('admin/css/bootstrap.min.css')}}" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{url('admin/css/ready.css')}}">
	<link rel="stylesheet" href="{{url('admin/css/demo.css' )}}">
		{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
	
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					Pestkit Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					{{-- <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{url('admin/img/profile.jpeg')}}" alt="user-img" width="36px" height="36px" class="img-circle img-fluid" ><span >Nishi</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="{{url('admin/img/profile.jpeg')}}" alt="user"></div>
										<div class="u-text">
											<h4>Nishi</h4>
											<p class="text-muted">hello@pestkita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div> --}}
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="{{url('admin/img/profile.jpeg')}}">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Nishi
									<span class="user-level">Administrator</span>
									{{-- <span class="caret"></span> --}}
								</span>
							</a>
							{{-- <div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
								</ul>
							</div> --}}
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="{{route('admin')}}">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
								{{-- <span class="badge badge-count">5</span> --}}
							</a>
						</li>
						@if(session('logined')->role == 'admin')
						<li class="nav-item">
							<a href="{{route('get-users')}}">
								<i class="la la-keyboard-o"></i>
								<p>users</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('get-slider')}}">
								<i class="la la-th"></i>
								<p>Sliders</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('get-service')}}">
								<i class="la la-th"></i>
								<p>Service</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('get-project')}}">
								<i class="la la-th"></i>
								<p>Project</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('get-blog')}}">
								<i class="la la-th"></i>
								<p>Blog</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('get-team')}}">
								<i class="la la-th"></i>
								<p>Team</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('get-testimonial')}}">
								<i class="la la-th"></i>
								<p>Testimonial</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('get-contact')}}">
								<i class="la la-th"></i>
								<p>Contact</p>
							</a>
						</li>
						@endif
						<li class="nav-item">
							<a href="{{route('logout')}}">
								<i class="la la-th"></i>
								<p>logout</p>
							</a>
						</li>
					</ul>
				</div>
</div>
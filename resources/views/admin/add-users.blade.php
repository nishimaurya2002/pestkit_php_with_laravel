@include('admin.layout.header')	
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Usres</h4>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<h3 class="text-success">{{session('success')}}</h3>
										<div class="card-title">Users Form</div>
										{{-- <a href="/admin/users" class="btn btn-info">Add Users</a> --}}
									</div>
                                 
									<div class="card-body">
										<form  method="post" action="{{route('post-users')}}">
											@csrf
											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" class="form-control" id="email" name="name" placeholder="Enter Email">
											</div>
											@error('name')
											<small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
										</div>
										   @error('email')
										   <small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control"name="password" id="password" placeholder="Password">
										</div>
											@error('password')
											<small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-group">
											<label for="disableinput">Phone</label>
											<input type="text" class="form-control" id="disableinput"name="phone" placeholder="Enter Input" >
										</div>
										@error('phone')
										<small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-group">
											<label for="role">Role</label><br/>
											Admin <input type="radio" name="role"  value="admin">
											User <input  type="radio" name="role" value="user">
										</div>
										@error('role')
										<small class="text-danger">{{$message}}</small>
											@enderror
										<div class="card-action">
											<button class="btn btn-success" type="submit">Submit</button>
										</div>
									</form>
								</div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</div>
	@include('admin.layout.footer')
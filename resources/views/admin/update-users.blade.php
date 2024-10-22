@include('admin.layout.header')	
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Forms</h4>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<h2 class="text-success">{{session('success')}}</h2>
										<div class="card-title">Update</div>
									</div>
									<div class="card-body">
										<form  method="post" action="{{route('update-users')}}">
											@csrf
                                            <input type="hidden" name="id" value="{{$user->id}}">
											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" class="form-control" value="{{$user->name}}"  name="name" placeholder="Enter Email">
											</div>
											@error('name')
                                            <small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" class="form-control" value="{{$user->email}}" id="email" name="email" placeholder="Enter Email">
										</div>
										   @error('email')
                                           <small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-group">
											<label for="phone">Phone</label>
											<input type="text" class="form-control" value="{{$user->phone}}" name="phone" placeholder="Enter Input">
										</div>
										@error('phone')
                                        <small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-check">
											<label>Role</label><br/>
												<input  type="radio" {{$user->role=='admin'?'checked':''}} name="role" value="admin">Admin
												<input  type="radio"  {{$user->role=='user'?'checked':''}} name="role" value="user">User
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
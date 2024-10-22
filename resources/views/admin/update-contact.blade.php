@include('admin.layout.header')	
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">contact Forms</h4>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<h2 class="text-success">{{session('success')}}</h2>
										<div class="card-title">Update</div>
									</div>
									<div class="card-body">
										<form  method="post" action="{{route('update-contact')}}">
											@csrf
                                            <input type="hidden" name="id" value="{{$contact->id}}">
											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" class="form-control" value="{{$contact->name}}"  name="name" placeholder="Enter Email">
											</div>
											@error('name')
                                            <small class="text-danger">{{$message}}</small>
											@enderror
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" class="form-control" value="{{$contact->email}}"  id="email" name="email" placeholder="Enter Email">
										</div>
										   @error('email')
                                           <small class="text-danger">{{$message}}</small>
											@enderror
                                            <div class="form-group">
                                                <label for="msg">Message</label>
                                                <textarea name="message" id="msg">{{$contact->message}}</textarea>
                                            </div>
                                               @error('message')
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
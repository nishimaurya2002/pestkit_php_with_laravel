@include('admin.layout.header')	
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Team</h4>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<h3 class="text-success">{{session('success')}}</h3>
										<div class="card-title">update-Team</div>
										{{-- <a href="/admin/slider" class="btn btn-info">Add Sliders</a> --}}
									</div>
                                 
									<div class="card-body">
										<form  method="post" action="{{route('update-team')}}"  enctype="multipart/form-data"> 
											@csrf
                                            <input type="hidden" name="id" value="{{$team->id}}">
											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" class="form-control" name="name" id="name" value="{{$team->name}}">
											</div>
												@error('name')
												<small class="text-danger">{{$message}}</small>
												@enderror
											<div class="form-group">
												<label for="des">Designation</label>
												<input type="text" class="form-control" id="Des" name="designation" value="{{$team->designation}}">
											</div>
												@error('description')
												<small class="text-danger">{{$message}}</small>
												@enderror
											<div class="form-group">
												<label for="images">Images</label>
												<input type="file" class="form-control" id="image" name="image" value="{{$team->image}}">
											</div>
                                                @error('image')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            <div class="form-group">
												<label for="facebook">Facebook</label>
												<input type="text" class="form-control" id="facebook" name="facebook" value="{{$team->facebook}}">
											</div>
												@error('facebook')
												<small class="text-danger">{{$message}}</small>
												@enderror
                                            <div class="form-group">
                                                    <label for="insta">Instagram</label>
                                                    <input type="text" class="form-control" id="insta" name="instagram" value="{{$team->instagram}}">
                                            </div>
                                                @error('instagram')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            <div class="form-group">
                                                <label for="linkdin">Linkdin</label>
                                                <input type="text" class="form-control" id="linkdin" name="linkdin" value="{{$team->linkdin}}">
                                            </div>
                                                @error('linkdin')
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
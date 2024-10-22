@include('admin.layout.header')	
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Service</h4>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<h3 class="text-success">{{session('success')}}</h3>
										<div class="card-title">update-service</div>
										{{-- <a href="/admin/slider" class="btn btn-info">Add Sliders</a> --}}
									</div>
                                 
									<div class="card-body">
										<form  method="post" action="{{route('update-service')}}"  enctype="multipart/form-data"> 
											@csrf
                                            <input type="hidden" name="id" value="{{$service->id}}">
											<div class="form-group">
												<label for="heading">Heading</label>
												<input type="text" class="form-control" name="heading" id="heading" value="{{$service->heading}}">
											</div>
												@error('heading')
												<small class="text-danger">{{$message}}</small>
												@enderror
											<div class="form-group">
												<label for="des">Description</label>
												<input type="text" class="form-control" id="description" name="description" value="{{$service->description}}">
											</div>
												@error('description')
												<small class="text-danger">{{$message}}</small>
												@enderror
											{{-- <div class="form-group">
												<label for="images">Images</label>
												<input type="file" class="form-control" id="image" name="image"  value="{{$service->image}}">
											</div>
											@error('image')
											<small class="text-danger">{{$message}}</small>
											@enderror --}}
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
@include('admin.layout.header')	
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Project</h4>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<h3 class="text-success">{{session('success')}}</h3>
										<div class="card-title">Update-Project</div>
										{{-- <a href="/admin/slider" class="btn btn-info">Add Sliders</a> --}}
									</div>
                                 
									<div class="card-body">
										<form  method="post" action="{{route('update-project')}}"  enctype="multipart/form-data"> 
											@csrf
                                            <input type="hidden" name="id" value="{{$project->id}}">
											<div class="form-group">
												<label for="category">Category</label>
												<select name="category" id="" class="form-control">
                                                    <option value="">-------select------</option>
                                                    <option value="Sanitizing" {{$project->categoy == 'Sanitizing' ? 'selected' : '' }}>Sanitizing</option>
                                                    <option {{$project->category == 'sanit' ? 'Selected':''}}  value="Sani"> Saniti</option>
                                                    {{-- <option {{$project->category == 'sanitizing' ? 'Selected':''}}  value="Sanitizing"> Sanitizing</option>
                                                    <option {{$project->category == 'sanitizing' ? 'Selected':''}}   value="Sanitizing"> Sanitizing</option>
                                                    <option {{$project->category == 'sanitizing' ? 'Selected':''}}  value="Sanitizing"> Sanitizing</option>
                                                    <option {{$project->category == 'sanitizing' ? 'Selected':''}}  value="Sanitizing"> Sanitizing</option> --}}
                                                </select>
											</div>
												@error('category')
												<small class="text-danger">{{$message}}</small>
												@enderror
											<div class="form-group">
												<label for="images">Images</label>
												<input type="file" class="form-control" id="image" name="image"  value="{{$project->image}}">
											</div>
											@error('image')
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
@include('admin.layout.header')
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Project-list</h4>
						<div class="row">
							{{-- <div class="col-md-1"></div> --}}
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Project Table</div>
									</div>
									<div class="card-body">
										<a href="{{route('add-project')}}" class="btn btn-info">Add Project</a>
										<h4 class="text-success">{{session('success')}}</h4>
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#Id</th>
													<th scope="col">Category</th>
													<th scope="col">Images</th>
													<th scope="col">Create_At</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												{{-- @php
													 print_r($users);
												@endphp --}}
												@foreach ($project as $item)   
													<tr class="table-info">
														<td>{{$item->id}}</td>
														<td>{{$item->category}}</td>
														<td><img src="{{url('storage/'.$item->image)}}"alt="" width="50px" height="50px" class="rounded-circle"></td>
														<td>{{$item->created_at}}</td>
														<td>
															<a href="{{route('update-project',['id'=>$item->id])}}" class="pe-3">
																<i class="la la-pencil text-success "></i>
																</a>
															<a href="{{route('delete-project',['id'=>$item->id])}}">
																<span class="la la-trash text-danger"></span>
																</a>
														</td>
													</tr>
                                                @endforeach
											</tbody>
										</table>
									</div>
								</div>
								{{$project->links()}}
							</div>
							{{-- <div class="col-md-1"></div> --}}
						</div>
					</div>
				</div>
			</div>
@include('admin.layout.footer')

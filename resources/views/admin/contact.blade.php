@include('admin.layout.header')
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Contact-list</h4>
						<div class="row">
							{{-- <div class="col-md-1"></div> --}}
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Contact Table</div>
									</div>
									<div class="card-body">
										<h5 class="text-success">{{session('success')}}</h5>
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#Id</th>
													<th scope="col">Name</th>
													<th scope="col">Email</th>
													<th scope="col">Message</th>
													<th scope="col">Response</th>
													<th scope="col">Create_At</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												{{-- @php
													 print_r($users);
												@endphp --}}
												@foreach ($contact as $item)   
													<tr class="table-info">
														<td>{{$item->id}}</td>
														<td>{{$item->name}}</td>
														<td>{{$item->email}}</td>
														<td>{{$item->message}}</td>
														<td>{{($item->response)}}</td>
														<td>{{$item->created_at}}</td>
														<td>
															<a href="{{route('update-contact',['id'=>$item->id])}}" class="pe-3">
																<i class="la la-pencil text-success "></i>
																</a>
															<a href="{{route('delete-contact',['id'=>$item->id])}}">
																<span class="la la-trash text-danger"></span>
																</a>
														</td>
													</tr>
                                                @endforeach
											</tbody>
										</table>
									</div>
									{{$contact->links()}}
								</div>
							</div>
							{{-- <div class="col-md-1"></div> --}}
						</div>
					</div>
				</div>
			</div>
@include('admin.layout.footer')


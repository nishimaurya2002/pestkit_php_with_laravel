@include('admin.layout.header')
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Users-list</h4>
						<div class="row">
							{{-- <div class="col-md-1"></div> --}}
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Users Table</div>
									</div>
									<div class="card-body">
										<a href="/admin/add-users" class="btn btn-info">Add User</a>
										<h5 class="text-success">{{session('success')}}</h5>
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#Id</th>
													<th scope="col">Name</th>
													<th scope="col">Email</th>
													<th scope="col">Phone</th>
													<th scope="col">Role</th>
													<th scope="col">Create_At</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												{{-- @php
													 print_r($users);
												@endphp --}}
												@foreach ($users as $item)   
													<tr class="table-info">
														<td>{{$item->id}}</td>
														<td>{{$item->name}}</td>
														<td>{{$item->email}}</td>
														<td>{{$item->phone}}</td>
														<td>{{ucFirst($item->role)}}</td>
														<td>{{$item->created_at}}</td>
														<td>
															<a href="{{route('update-users',['id'=>$item->id])}}" class="pe-3">
																<i class="la la-pencil text-success "></i>
																</a>
															<a href="{{route('delete-users',['id'=>$item->id])}}">
																<span class="la la-trash text-danger"></span>
																</a>
														</td>
													</tr>
                                                @endforeach
											</tbody>
										</table>
									</div>
									{{$users->links()}}
								</div>
							</div>
							{{-- <div class="col-md-1"></div> --}}
						</div>
					</div>
				</div>
			</div>
@include('admin.layout.footer')
{{-- <script>
	$('#displayNotif').on('click', function(){
		var placementFrom = $('#notify_placement_from option:selected').val();
		var placementAlign = $('#notify_placement_align option:selected').val();
		var state = $('#notify_state option:selected').val();
		var style = $('#notify_style option:selected').val();
		var content = {};

		content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
		content.title = 'Bootstrap notify';
		if (style == "withicon") {
			content.icon = 'la la-bell';
		} else {
			content.icon = 'none';
		}
		content.url = 'index.html';
		content.target = '_blank';

		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
			time: 1000,
		});
	});
</script> --}}
{{-- </html> --}}
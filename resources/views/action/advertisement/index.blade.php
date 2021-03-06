@extends("layout.app-backend")
@include('admin.sidebar')
@include('utils.success-error')
@section('content')
<style type="text/css">
	#postList .fa{
		font-size: 20px;
	}
	td{
		margin:10px 0;
	}
	#postList a{
		padding: 10px;
	}
</style>
@yield('success-error')
<div id="postList" class="mt-4">
	@if(count($ads)>0)
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<table id="example" class="display text-center" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Name</th>
				<th>Page</th>
				<th>Redirection Url</th>
				<th>Image</th>
				<th>Order</th>
				<th>Action</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Name</th>
				<th>Page</th>
				<th>Redirection Url</th>
				<th>Image</th>
				<th>Order</th>
				<th>Action</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach($ads as $item)
			<tr>
				<td>{{$item->name}}</td>
				<td>{{$item->page}}</td>
				<td>{{$item->url}}</td>
				<td style="width:10%;">
					<img src="{{$item->cover}}" class="img-fluid">
				</td>
				<td class="text-center">{{$item->order}}</td>
				<td class="text-center">
					<a href="{{url('/admin/advertisements/'.$item->id.'/edit')}}" class="border border-primary">
						<i class="text-primary fa fa-pencil"></i>
					</a>
					&nbsp;
					<a href="{{url('/admin/category/delete/'.$item->id)}}" class="border border-danger">
						<i class="text-danger fa fa-trash"></i>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@endif
</div>
@endsection
@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript">
	$('#example').DataTable({
		"scrollX": true
	});
</script>
@endsection
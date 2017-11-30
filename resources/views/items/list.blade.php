@extends('main')

@section('content')
	<div class="row">
		<div class="col-md-5 col-md-offset-7 text-right">
			<form action="{{ env('APP_URL') }}/" method="get">
				<div class="form-group">
					<div class="input-group">
					      <input type="text" class="form-control" placeholder="Search for..." name="query" value="{{ $query }}">
					      <span class="input-group-btn">
					        <button class="btn btn-default">Go!</button>
					        <a href="{{ env('APP_URL') }}/new" class="btn btn-primary" title="Create New Item"><i class="fa fa-file-text"></i></a>
					      </span>
				    </div><!-- /input-group -->
				</div>
			</form>
		</div>
		<div class="col-md-12">
			<table class="table table-stripred table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $item)
						<tr>
							<td>{{$item->id}}</td>
							<td>{{$item->name}}</td>
							<td>{{$item->quantity}}</td>
							<td>{{$item->price}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
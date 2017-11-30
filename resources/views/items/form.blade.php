@extends('main')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<form action="{{ env('APP_URL') }}/store" method="post">
				{{ csrf_field() }}
				<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
				  </div>
				  <div class="form-group">
				    <label for="quantity">Quantity</label>
				    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
				  </div>
				  <div class="form-group">
				    <label for="price">Price</label>
				    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
@endsection
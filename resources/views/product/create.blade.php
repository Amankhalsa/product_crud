@extends('product.layout')

@section('content')

<br><br><br>
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Add New Product  </h2>
		</div>
		<div class="pull-right">
			<a href="{{route('product.index')}}" class="btn btn-success">Back</a>
			
		</div>
		
	</div>
</div>

<form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
	@csrf
<div class="row">
	
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<strong>Product name</strong>
			<input type="text" name="product_name" class="form-control" placeholder="product name"> 
		</div>
	</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<strong>Product code</strong>
			<input type="text" name="product_code" class="form-control" placeholder="product code"> 
		</div>
	</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Product Details</strong>
		<textarea cols="5" rows="5" class="form-control" name="details" placeholder="details">
			
		</textarea>
		</div>
	</div>
	<!-- image  -->
				<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Product Image</strong>
	<input type="file" name="logo" class="form-control">
		</div>
	</div>
	<!-- button -->
					<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
	
	<button class="btn btn-primary" type="submit" > Submit</button>
		</div>
	</div>

</div>


</form>






@endsection
@extends('product.layout')

@section('content')

<br><br><br>
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit New Product : </h2>
		</div>
		<div class="pull-right">
			<a href="{{route('product.index')}}" class="btn btn-success">Back</a>
			
		</div>
		
	</div>
</div>


<div class="row">
	
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Product name : </strong>
			<p>{{$data->product_name}}</p>
		</div>
	</div>

	<!-- code  -->

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Product Code :</strong>
			<p>{{$data->product_code}}</p>
		</div>
	</div>
		
		<!-- Details -->
			<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Product Details :</strong>
			<p>{{$data->details}}</p>
		</div>
	</div>
<!-- logo -->

			<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Product logo :</strong>
		<img src="{{asset($data->logo)}}" width="100">
		</div>
	</div>
	

</div>

</form>


@endsection
@extends('product.layout')
@section('content')
<br><br><br>
<div class="row">

	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Product list </h2>
		</div>
		<div class="pull-right">
			<a href="{{route('create.product')}}" class="btn btn-success">Create new product</a>
			
		</div>
		
	</div>

</div>
	@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{$message}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif

<table class="table table-bordered">
	<tr>
		<th width="5%">	Product name </th>
		<th width="10%">Product Code </th>
		<th width="50%">product Details </th>
		<th width="10%">Product logo </th>
		<th width="20%">Action </th>
	</tr>
	@foreach($product as $value)
<tr>
<td>{{$value->product_name}} </td> 
<td>{{$value->product_code}}</td>
<td>{{$value->details}}</td>
<td><img src="{{$value->logo}}" width="100"></td>
<td><a href="" class="btn btn-info">Show</a>
	<a href="{{route('edit.product',$value->id)}}" class="btn btn-primary">Edit</a>
	<a href="" class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach
</table>



@endsection
@extends('backend.backendtemplate')
@section('content')

 <div class="container">

          <div class="row">
          	<div class="col-6">
          		<h1 class="h3 mb-4 text-gray-800">Order List</h1>
          	</div>
          </div>

 </div>
        <div class="container">
        	<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Voucher No</th>
			      <th scope="col">User</th>
			      <th scope="col">Total</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  	@foreach($orders as $order)
			    <tr>
			      <td>{{ $order->voucherno }}</td>
			      <td>{{ $order->user->name }}</td>
			      <td>{{ $order->total }}</td>
			      <td>
			      	<a href="{{ route('orders.show',$order->id) }}" class="btn btn-primary btn-sm">Detail</a>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
			
        </div>


@endsection
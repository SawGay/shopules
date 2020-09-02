@extends('backend.backendtemplate')
@section('content')

 <div class="container">

          <div class="row">
          	<div class="col-6">
          		<h5 class="mb-4 text-gray-800">Voucherno : {{ $order->voucherno }}</h5>
          		<h5 class="mb-4 text-gray-800">Orderdate : {{ $order->orderdate }}</h5>
          	</div>
          </div>

 </div>
        <div class="container">
        	<table class="table table-bordered">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Item Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Qty</th>
			      <th scope="col">Subtotal</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			 @php  $i=1; $total=0; @endphp
			  	@foreach($order->items as $item)
			  	@php
			  		$subtotal=$item->price*$item->pivot->qty;
			  		$total+=$subtotal;
			  	@endphp
			    <tr>

			      <th scope="row">{{ $i }}</th>
			      <td>{{ $item->name }}</td>
			      <td>{{ $item->price }}</td>
			      <td>{{ $item->pivot->qty }}</td>
			      <td>{{ $subtotal }}</td>
			      
			    </tr>
			    @php $i++; @endphp
			    @endforeach
			  </tbody>
			  <tfoot class="thead-dark">
			    <tr>
			      <th scope="col" colspan="4">Total</th>
			      <th scope="col"> {{ $total }}MMK</th>
			      
			    </tr>
			  </tfoot>
			</table>
			
        </div>


@endsection
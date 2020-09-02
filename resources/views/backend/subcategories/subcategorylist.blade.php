@extends('backend.backendtemplate')
@section('content')

 <div class="container">

          <div class="row">
          	<div class="col-6">
          		<h1 class="h3 mb-4 text-gray-800">Subcategory List</h1>
          	</div>
          	<div class="col-6">
          		<div class="float-right">
          			<a href="{{ route('subcategories.create') }}" class="btn btn-info"> Add new</a>
          		</div>	
          	</div>
          </div>

 </div>
        <div class="container">
        	<table class="table table-bordered">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Subcategory Name</th>
			      <th scope="col">Category Name</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@php  $i=1; @endphp
			  	@foreach($subcategories as $subcategory)
			    <tr>

			      <th scope="row">{{ $i }}</th>
			      <td>{{ $subcategory->name }}</td>
			      <td>{{ $subcategory->category->name }}</td>
			      <td>
			      	<a href="" class="btn btn-primary btn-sm">Detail</a>
			      	<a href="{{ route('subcategories.edit',$subcategory->id) }}" class="btn btn-warning btn-sm">Edit</a>
			      	<a href="" class="btn btn-danger btn-sm">Delete</a>
			      </td>
			    </tr>
			    @php $i++; @endphp
			    @endforeach
			  </tbody>
			</table>
			
        </div>


@endsection
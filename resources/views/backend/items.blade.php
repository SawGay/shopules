@extends('backend.backendtemplate')
@section('content')
	<!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Item Create Form</h1>

        </div>
	<div class="container">
		<form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
			@csrf
		<div class="form-group row">
		<label for="codeno" class="col-sm-2 col-form-label">Code No</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="codeno" name="codeno">
		</div>
		</div>
		<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="name" name="name">
		</div>
		</div>
		<div class="form-group row">
		<label for="photo" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
		  <input type="file" class="form-control-file" id="photo" name="photo">
		</div>
		</div>
		<div class="form-group row">
		<label for="price" class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-6">
		  <input type="number" class="form-control" id="price" name="price">
		</div>
		</div>
		<div class="form-group row">
		<label for="discount" class="col-sm-2 col-form-label">Discount</label>
		<div class="col-sm-6">
		  <input type="number" class="form-control" id="discount" value="0" name="discount">
		</div>
		</div>
		<div class="form-group row">
		<label for="description" class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-6">
		  <textarea class="form-control" id="description" name="description"></textarea>
		</div>
		</div>

		<div class="form-group row">
			<label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
		<div class="col-sm-6">
			<select class="form-control form-control-md" id="inputBrand" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
					<option value="{{ $brand->id }}">
						{{ $brand->name }}
					</option>
					@endforeach
				</optgroup>
			</select>
		</div>
		</div>

		<div class="form-group row">
			<label for="inputSubcategory" class="col-sm-2 col-form-label">Subcategory</label>
		<div class="col-sm-6">
			<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
				<optgroup label="Choose Subcategory">
					@foreach($subcategories as $subcategory)
					<option value="{{ $subcategory->id }}">
						{{ $subcategory->name }}
					</option>
					@endforeach
				</optgroup>
			</select>
		</div>
		</div>


		<div class="form-group row">
		<div class="col-sm-10">
		  <button type="submit" class="btn btn-primary">Create</button>
		</div>
		</div>
		</form>
	</div>
    
@endsection
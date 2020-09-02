@extends('backend.backendtemplate')
@section('content')
	<!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Item</h1>

        </div>
	<div class="container">
		<form action="{{ route('items.update',$item->id) }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		<div class="form-group row">
		<label for="codeno" class="col-sm-2 col-form-label">Code No</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="codeno" name="codeno" value="{{ $item->codeno }}" readonly="readonly">
		</div>
		</div>
		<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
		</div>
		</div>
		<div class="form-group row">
		<label for="photo" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
		  <input type="file" class="form-control-file" id="photo" name="photo"><br>
		  <img src="{{ asset($item->photo) }}" class="img-fluid" width="120" height="100">
		  <input type="hidden" name="oldphoto" value="{{ $item->photo }}">
		</div>
		</div>
		<div class="form-group row">
		<label for="price" class="col-sm-2 col-form-label">Price</label>
		<div class="col-sm-6">
		  <input type="number" class="form-control" id="price" name="price" value="{{ $item->price }}">
		</div>
		</div>
		<div class="form-group row">
		<label for="discount" class="col-sm-2 col-form-label">Discount</label>
		<div class="col-sm-6">
		  <input type="number" class="form-control" id="discount" name="discount" value="{{ $item->discount }}">
		</div>
		</div>
		<div class="form-group row">
		<label for="description" class="col-sm-2 col-form-label">Description</label>
		<div class="col-sm-6">
		  <textarea class="form-control" id="description" name="description">{{ $item->description }}</textarea>
		</div>
		</div>

		<div class="form-group row">
			<label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
		<div class="col-sm-6">
			<select class="form-control form-control-md" id="inputBrand" name="brand">
				<optgroup label="Choose Brand">
					@foreach($brands as $brand)
					<option value="{{ $brand->id }}"
						@if($brand->id==$item->brand->id)
							selected
						@endif>
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
					<option value="{{ $subcategory->id }}" 
						@if($subcategory->id==$item->subcategory->id)
							selected
						@endif
						>
						{{ $subcategory->name }}
					</option>
					@endforeach
				</optgroup>
			</select>
		</div>
		</div>


		<div class="form-group row">
		<div class="col-sm-10">
		  <button type="submit" class="btn btn-primary">Update</button>
		</div>
		</div>
		</form>
	</div>
    
@endsection
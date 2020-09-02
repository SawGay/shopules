@extends('backend.backendtemplate')
@section('content')
	<!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Brand</h1>

        </div>
	<div class="container">
		<form action="{{ route('brands.update',$brand->id) }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name }}">
		   @error('name')
		  <label class="text-danger">Please input name</label>
		  @enderror
		</div>
		</div>
		<div class="form-group row">
		<label for="photo" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
		  <input type="file" class="form-control-file" id="photo" name="photo"><br>
		  <img src="{{ asset($brand->photo) }}" class="img-fluid" width="120" height="100">
		  <input type="hidden" name="oldphoto" value="{{ $brand->photo }}">
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
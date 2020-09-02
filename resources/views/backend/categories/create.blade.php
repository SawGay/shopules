@extends('backend.backendtemplate')
@section('content')
	<!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Category Create Form</h1>

        </div>
	<div class="container">
		<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
			@csrf
		
		<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="name" name="name">
		  {{-- @error('name')
		  <label class="text-danger">Please input name</label>
		  @enderror --}}
		  <span class="text-danger">{{ $errors->first('name') }}</span>
		</div>
		</div>
		<div class="form-group row">
		<label for="photo" class="col-sm-2 col-form-label">Photo</label>
		<div class="col-sm-6">
		  <input type="file" class="form-control-file" id="photo" name="photo">
		  {{--  @error('photo')
		  <label class="text-danger">Please choose photo</label>
		  @enderror --}}
		  <span class="text-danger">{{ $errors->first('photo') }}</span>
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
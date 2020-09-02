@extends('backend.backendtemplate')
@section('content')
	<!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Subategory Create Form</h1>

        </div>
	<div class="container">
		<form action="{{ route('subcategories.store') }}" method="post" enctype="multipart/form-data">
			@csrf
		
		<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Subcategory Name</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="name" name="name">
		 {{--  @error
		  <label class="text-danger">please enter name!</label>
		  @enderror --}}
		  <span class="text-danger">{{ $errors->first('name') }}</span>
		</div>
		</div>
	
		<div class="form-group row">
			<label for="inputCategory" class="col-sm-2 col-form-label">Category Name</label>
		<div class="col-sm-6">
			<select class="form-control form-control-md" id="inputCategory" name="category">
				<optgroup label="Choose Category">
					@foreach($categories as $category)
					<option value="{{ $category->id }}">
						{{ $category->name }}
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
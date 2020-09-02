@extends('backend.backendtemplate')
@section('content')
	<!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Subcategory</h1>

        </div>
	<div class="container">
		<form action="{{ route('subcategories.update',$subcategory->id) }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		
		<div class="form-group row">
		<label for="name" class="col-sm-2 col-form-label">Name</label>
		<div class="col-sm-6">
		  <input type="text" class="form-control" id="name" name="name" value="{{ $subcategory->name }}">
		</div>
		</div>
		
		<div class="form-group row">
			<label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
		<div class="col-sm-6">
			<select class="form-control form-control-md" id="inputCategory" name="category">
				<optgroup label="Choose Category">
					@foreach($categories as $category)
					<option value="{{ $category->id }}"
						@if($category->id==$subcategory->category->id)
							selected 
						@endif>
						{{ $category->name }}
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
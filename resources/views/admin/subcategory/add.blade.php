@extends('layouts.admin')
@section('title', 'SubCategory')
@section('nav-title', 'SubCategory')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form" action="{{ route('admin.subcategory.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">add</i>
                        </div>
                        <h5 class="card-title">Add SubCategory</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-12">
                    			<div class="form-group">
                    				<label for="image">Image</label>
                    				<input type="file" name="image" id="image" class="dropify" accept=".png, .jpg, .jpeg, .gif, .svg">
                    				@error('name')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror

                    			</div>
                    		</div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select type="text" name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" autocomplete="off">
                                        <option selected disabled value="">Select one..</option>
                                        @foreach($cats as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    		<div class="col-4">
                    			<div class="form-group">
                    				<label for="name">Name</label>
                    				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="off">
                    				@error('name')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror
                    			</div>
                    		</div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" autocomplete="off">
                                    @error('price')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    		<div class="col-12">
                    			<div class="form-group">
                    				<label for="description">Description</label>
                    				<textarea name="description" id="description" rows="3" class="form-control @error('name') is-invalid @enderror" autocomplete="off">{{ old('description') }}</textarea>
                    				@error('description')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror
                    			</div>
                    		</div>
                            
                    	</div>
                    </div>
                    <div class="card-footer mt-4">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        CKEDITOR.replace('description');
    });
</script>
@endsection
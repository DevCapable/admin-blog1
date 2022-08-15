@extends('layouts.master')


@section('title','category')

@section('content')


<div class="card mt-4">
    <div class="card-header">
    <h4 class="mt-4">Edit Category</h4>
    </div>
    
    <div class="card-body">
   
  

        <form action="{{ url('admin/update-category/'. $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label >category Name</label>
              <input type="text" name="name" value="{{ $category->name }}"  class="form-control">  
            </div>

            <div class="mb-3">
              <label >slug</label>
              <input type="text" name="slug"  value="{{ $category->slug }}"   class="form-control">  
            </div>

            <div class="mb-3">
              <label >Description</label>
              <textarea name="description" id="mysummernote" row='5' class="form-control">{{ $category->description }}</textarea>  
            </div>

            <div class="mb-3">
              <label >Image</label>
              <input type="file" name="image"   class="form-control" />  
            </div>
          
            <h6>SEO Tags</h6>
            <div class="mb-3">
              <label >Meta Title</label>
              <input type="text" name="meta_title" value="{{ $category->meta_title}}"  class="form-control">  
            </div>

            <div class="mb-3">
              <label >Meta Description</label>
              <textarea name="meta_description"  row='3' class="form-control">{{ $category->meta_description }}</textarea>  
            </div>

            <div class="mb-3">
              <label >meta keyword</label>
              <textarea name="meta_keyword"  row='3' class="form-control">{{ $category->meta_keyword }}</textarea>  
            </div>
            <h6> status Mode</h6>
            <div class="row">
            <div class="col-md-3 mb-3">
              <label >Navbar status</label>
              <input type="checkbox" name="navbar_status" {{ $category->navbar_status =='1' ? 'checked' :'' }}  />  
            </div>
               
            <div class="col-md-3 mb-3">
              <label>Status</label>
              <input type="checkbox" name="status" {{ $category->status =='1' ? 'checked' :'' }} /> 
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Update category</button>
            </div>
            </div>
         

        </form>
</div>
    </div>
</div>
</div>

@endsection 
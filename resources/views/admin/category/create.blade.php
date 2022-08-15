@extends('layouts.master')


@section('title','category')

@section('content')


<div class="card mt-4">
    <div class="card-header">
    <h4 class="mt-4">Add Category</h4>
    </div>
    
    <div class="card-body">
   
  

        <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label >category Name</label>
              <input type="text" name="name"   class="form-control">  
            </div>

            <div class="mb-3">
              <label >slug</label>
              <input type="text" name="slug"   class="form-control">  
            </div>

            <div class="mb-3">
              <label >Description</label>
              <textarea name="description"  row='5' id="mysummernote" class="form-control"></textarea>  
            </div>

            <div class="mb-3">
              <label >Image</label>
              <input type="file" name="image"   class="form-control" />  
            </div>
          
            <h6>SEO Tags</h6>
            <div class="mb-3">
              <label >Meta Title</label>
              <input type="text" name="meta_title"   class="form-control">  
            </div>

            <div class="mb-3">
              <label >Meta Description</label>
              <textarea name="meta_description"  row='3' class="form-control"></textarea>  
            </div>

            <div class="mb-3">
              <label >meta keyword</label>
              <textarea name="meta_keyword"  row='3' class="form-control"></textarea>  
            </div>
            <h6> status Mode</h6>
            <div class="row">
            <div class="col-md-3 mb-3">
              <label >Navbar status</label>
              <input type="checkbox" name="navbar_status"   />  
            </div>
               
            <div class="col-md-3 mb-3">
              <label>Status</label>
              <input type="checkbox" name="status" /> 
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">save category</button>
            </div>
            </div>
         

        </form>
</div>
    </div>
</div>
</div>

@endsection
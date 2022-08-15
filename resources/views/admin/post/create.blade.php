@extends('layouts.master')


@section('title','Add Post')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
        <h4>
          <a href="{{ url('admin/add-post')}}" class="btn btn-primary float-end">
          Add Posts
        </a>
        </h4>
    </div>
    <div class="card-body">
        
    <form action="{{ url('admin/add-post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($category as $cateitem)
                <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="">Post Name</label>  
          <input type="text" name="name" class="form-control"/>
        </div>
        <div class="mb-3">
          <label for="">slug</label>  
          <input type="text" name="slug" class="form-control"/>
        </div>
        <div class="mb-3">
              <label >Description</label>
              <textarea name="description" id="mysummernote" row='4' class="form-control"></textarea>  
            </div>

            <div class="mb-3">
              <label >Youtube Iframe Link</label>
              <input type="text" name="yt_iframe"   class="form-control" />  
            </div>
          
            <h6>SEO Tags</h6>
            <div class="mb-3">
              <label >Meta Title</label>
              <input type="text" name="meta_title"   class="form-control"/>  
            </div>

            <div class="mb-3">
              <label >Meta Description</label>
              <textarea name="meta_description"  row='3' class="form-control"></textarea>  
            </div>

            <div class="mb-3">
              <label >meta keyword</label>
              <textarea name="meta_keyword"  row='3' class="form-control"></textarea>  
            </div>
            <h6> Status </h6>
            <div class="row">               
            <div class="col-m4-3 mb-3">
              <label>Status</label>
              <input type="checkbox" name="status" /> 
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">save Post</button>
            </div>
    </form>
    </div>
</div>

</div>
@endsection
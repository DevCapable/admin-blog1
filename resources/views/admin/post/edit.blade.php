@extends('layouts.master')


@section('title','Edit Post')

@section('content')

<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
        <h4>Edit Posts
          <a href="{{ url('admin/posts')}}" class="btn btn-danger float-end">
        BACK
        </a>
        </h4>
    </div>
    <div class="card-body">
        
    <form action="{{ url('admin/update-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Category</label>
            <select name="category_id" required class="form-control">
                <option value="">-- select Category --</option>
            @foreach ($category as $cateitem)
                <option value="{{ $cateitem->id }}" {{$post->category_id == $cateitem->id ? 'selected' : ''}} >
                    {{ $cateitem->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="">Post Name</label>  
          <input type="text" name="name" value="{{ $post->name }}" class="form-control"/>
        </div>
        <div class="mb-3">
          <label for="">slug</label>  
          <input type="text" name="slug" value="{{ $post->slug }}" class="form-control"/>
        </div>
        <div class="mb-3">
              <label >Description</label>
              <textarea type= "text" name="description" id="mysummernote" row='4' class="form-control">{!! $post->description !!}</textarea>  
            </div>

            <div class="mb-3">
              <label >Youtube Iframe Link</label>
              <input type="text" name="yt_iframe"  value="{{ $post->yt_iframe}}" class="form-control" />  
            </div>
          
            <h6>SEO Tags</h6>
            <div class="mb-3">
              <label >Meta Title</label>
              <input type="text" name="meta_title" value="{{ $post->meta_title }}"  class="form-control"/>  
            </div>

            <div class="mb-3">
              <label >Meta Description</label>
              <textarea name="meta_description"  row='3' class="form-control">{!! $post->meta_description !!}</textarea>  
            </div>

            <div class="mb-3">
              <label >meta keyword</label>
              <textarea name="meta_keyword"  row='3' class="form-control">{!! $post->meta_keyword !!}</textarea>  
            </div>
            <h6> Status </h6>
            <div class="row">               
            <div class="col-m4-3 mb-3">
              <label>Status</label>
              <input type="checkbox" name="status" {{ $post->status == '1' ? 'checked' : ''}} /> 
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>
    </form>
    </div>
</div>

</div>
@endsection
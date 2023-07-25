@extends('admin.layouts.main')
@section('content')
    

<div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Add post </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
     <class="container-fluid">
      <div class="row">
      <div class="col-12">
    
        <form action="{{route('admin.post.store.index')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group w-25">
            <input type="text" class="form-control" name="title" placeholder="Name post"
            value="{{old('title')}}"
            >
            @error('title')
            <div class="text-danger"> 
               {{$message}}
                   </div>
            @enderror
         
          </div>
          <div class="form-group ">
            <textarea id="summernote" name="content">
              {{old('content')}} </textarea>
          </div>
          @error('content')
          <div class="text-danger"> 
            {{$message}}
                </div>
                @enderror
          <div class="form-group w-50">
            <label for="exampleInputFile">Add preview</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="preview_image">
                <label class="custom-file-label">Choose image</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>

          <div class="form-group w-50">
            <label for="exampleInputFile">Add main image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="main_image">
                <label class="custom-file-label">Choose image</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>

          <div class="form-group w-50">
            <label>Choice category</label>
            <select name="category_id" class="form-control">
              @foreach ($categories as $category)
              <option value="{{$category->id}}"
                {{ $category->id == old('category_id') ? 'selected' : ''}}>
                {{ $category->title}} </option>  
              @endforeach
            </select>            
          </div>
          
          <div class="form-group">
            <label>Tag</label>
            <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Select a tag" style="width: 100%;">
              @foreach($tags as $tag)

              <option {{ is_array (old('tag_ids')) && in_array ($tag->id, old('tag_ids')) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>

              @endforeach
            
            </select>
          </div>
          <div class="form-group w-2">
          <input type="submit" class="btn btn-primary" value="Add">
          </div>
          
        </form>
      </section>
    </div>
  </div>
  @endsection
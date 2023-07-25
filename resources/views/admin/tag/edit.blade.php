@extends('admin.layouts.main')
@section('content')
    

<div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Edit tag </h1>
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
    
        <form action="{{route('admin.tag.update.index',$tag->id)}}" method="POST" class='col-4'>
          @csrf
          @method('PATCH')
          <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Enter tag"
            value="{{$tag->title}}">
            @error('title')
            <div class="text-danger">  {{$message}}   </div>
            @enderror
          </div>
          <input type="submit" class="btn btn-primary" value="Update">
        </form>
      </section>
    </div>
  </div>
  @endsection
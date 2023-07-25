@extends('admin.layouts.main')
@section('content')
    

<div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Add tag </h1>
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
    
        <form action="{{route('admin.tag.store.index')}}" method="POST" class='col-4'>
          @csrf
          <div class="form-group">
            <label for="example">Name Tag</label>
            <input type="text" class="form-control" name="title" placeholder="Enter tag">
            @error('title')
            <div class="text-danger"> 
               {{$message}} 
              </div>
            @enderror
           
          </div>
          <input type="submit" class="btn btn-primary" value="Add">

        </form>
      </section>
    </div>
  </div>
  @endsection
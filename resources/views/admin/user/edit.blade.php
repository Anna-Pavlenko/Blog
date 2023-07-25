@extends('admin.layouts.main')
@section('content')
    

<div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Edit user </h1>
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
    
        <form action="{{route('admin.user.update.index',$user->id)}}" method="POST" class='col-4'>
          @csrf
          @method('PATCH')
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Enter user"
            value="{{$user->name}}">
            @error('name')
            <div class="text-danger">  {{$message}}   </div>
            @enderror
          </div>
          <div class="form-group">
      
           <input type="text" class="form-control" name="email" placeholder="Enter email"  value="{{$user->email}}">
            @error('email')
            <div class="text-danger"> 
               {{$message}} 
              </div>
            @enderror
           
          </div>
          <div class="form-group w-50">
            <label>Choice user</label>
            <select name="role" class="form-control">
              @foreach ($roles as $id => $role)
              <option value="{{ $id }}"
                {{ $id == $user->role ? 'selected' : ''}}>
                {{ $role}} </option>  
              @endforeach
            </select>            
          </div>
          <div class="form-group w-50">
            <input type="hidden" name="user_id" value="{{$user->id}}">
          </div>
          <input type="submit" class="btn btn-primary" value="Update">
        </form>
      </section>
    </div>
  </div>
  @endsection
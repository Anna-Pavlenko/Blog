@extends('admin.layouts.main')
@section('content')
    

<div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> User</h1>
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
        <div class="container-fluid">
          <div class="col-1 mb-3" >
            <a href="{{route('admin.user.create.index')}}" button type="button"  class="btn btn-block btn-primary">Add</button> </a>
          </div>
        </div>
        <div>
          <div class="col-6">
          <div class="row">
        
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
              
         
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Show</th>
                  <th>Edit</th>
                  <th>Delete</th>
       
      
                </tr>        
              </thead>
              <tbody>
                @foreach ($users as $user)
             <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td><a href="{{route('admin.user.show.index', $user->id)}}"><i class="far fa-eye"></i></a></td>
              <td><a href="{{route('admin.user.edit.index', $user->id)}}" class="text-success"> <i class="fas fa-pencil-alt"></i></a></td>
             <td>
              <form action="{{route('admin.user.delete.index',$user->id)}}"
                method="POST">
                @csrf
                @method('DELETE')
               <button type="submit" class="border-0">  
              <i class="fas fa-trash text-danger"></i>
            </button>
              </form>
            </td>
             </tr>
              @endforeach
              </tbody> 
              
            </table>
          </div>
          </div>
          <div class="row">
          </div
        </div>
      </section>
    </div>
  </div>
  @endsection
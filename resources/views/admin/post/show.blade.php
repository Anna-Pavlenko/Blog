@extends('admin.layouts.main')
@section('content')
    

<div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 d-flex align-items-centre ">
              <h1 class="m-0 mr-2">{{$post->title}}</h1>
               <a href="{{route('admin.post.edit.index', $post->id)}}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
             
                <form action="{{route('admin.post.delete.index',$post->id)}}"
                  method="POST">
                  @csrf
                  @method('DELETE')
                 <button type="submit" class="border-0">  
                <i class="fas fa-trash text-danger"></i>
              </button>
               
              </td>
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
       
        <div>
          <div class="col-6">
          <div class="row">
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
         
              <tbody>

             <tr>
              <td>Id</td>
              <td>{{$post->id}}</td>

             </tr>
             <tr>
              <td>Name</td>
              <td>{{$post->title}}</td>

             </tr>
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
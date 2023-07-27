@extends('personal.layouts.main')
@section('content')
    

<div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Comment </h1>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">   
        <div>
          <div class="row">
          <div class="col-6">
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                </tr>        
              </thead>
              <tbody>
                @foreach($comments as $comment)
             <tr>
              <td>{{$comment->id}}</td>
              <td>{{$comment->message}}</td>
             <td>
              <form action="{{route('personal.liked.delete',$comment->id)}}"
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
        </div>
      </section>
    </div>
  </div>
  @endsection
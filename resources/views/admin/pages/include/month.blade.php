@extends('layouts.layout')
@section('content')
@include('admin.pages.include.header')
<div class="container">
    <h1 style="text-align: center;"><b>Month List</b> </h1>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#monthModal">
   Month create
      </button>
      @include('form.monthCreate')
    <div class="jumbotron">
       
 
  
        <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Create_by</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($month as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
       <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
               
        </tr>
        @endforeach
           
        </tbody>
          </table>
    </div>
</div>

@endsection

@extends('layouts.layout')
@section('content')
@include('admin.pages.include.header')
<div class="container">
    <h1 style="text-align: center;"><b> Registration List</b> </h1>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#registrationModal">
      Registration create
      </button>
      @include('form.registrationCreate')
      @if (session('status'))
      <h6 class="alert alert-success">{{ session('status') }}</h6>
  @endif
    <div class="jumbotron">
       
 
  
        <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Emale</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone</th>
               
                <th>Create_by</th>
                <th>Status</th>
                <th> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registration as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->phone}}</td>
               
                <td>{{$item->create_by}}</td>
                <td>{{$item->status}} </td>
               
                <td>
                    <a class="btn btn-success" href=""><i class="las la-trash"></i></a>
                    <a class="btn btn-danger" href=""><i class="las la-edit"></i></a>
                </td>
                
            </tr>
            @endforeach
           
        </tbody>
          </table>
    </div>
</div>

@endsection

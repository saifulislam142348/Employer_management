@extends('layouts.layout')
@section('content')
@include('admin.pages.include.header')
<div class="container">
    <h1 style="text-align: center;"><b>Attemdences List</b> </h1>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#attendenceModal">
       Attendences create
      </button>
      @include('form.attendenceCreate')
    <div class="jumbotron">
       
 
  
        <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Attemdences</th>
                <th>Status</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ddk</td>
                <td>2</td>
                <td>
                    <a class="btn btn-success" href=""><i class="las la-trash"></i></a>
                    <a class="btn btn-danger" href=""><i class="las la-edit"></i></a>
                </td>
                <td>
                    <a class="btn btn-success" href="">active</i></a>
                    <a class="btn btn-danger" href="">inactive</i></a>
                </td>
            </tr>
        </tbody>
          </table>
    </div>
</div>

@endsection

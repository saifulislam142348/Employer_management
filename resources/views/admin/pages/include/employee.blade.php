@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Employees List</b> </h1>
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#employeeModal">
            Employee create
        </button>
        @include('form.employeeCreate')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Salary</th>
                        <th> Join month</th>
                        <th> Join time</th>
                        <th>Status</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->department_id}}</td>
                            <td>{{$item->designation_id}}</td>
                           
                            <td>{{$item->salary}}</td>
                            <td>{{$item->month_id}}</td>
                            <td>{{$item->join_date}}</td>
                            <td>
                                <a class="btn btn-success" href=""><i class="las la-trash"></i></a>
                                <a class="btn btn-danger" href=""><i class="las la-edit"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="">active</i></a>
                                <a class="btn btn-danger" href="">inactive</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

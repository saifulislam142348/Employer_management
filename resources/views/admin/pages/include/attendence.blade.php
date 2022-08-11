@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Attemdences List</b> </h1>
        @include('form.attendenceCreate')
        <div class="d-flex bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#attendenceModal">
                    Attendences In Time
                </button>
            </div>


            <div class="ms-auto p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#attendence1Modal">
                    Attendences OutTime
                </button>
            </div>
        </div>













        @include('form.attendenceCreate1')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Month</th>
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th>Action</th>
                        <th>Attendences</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendence as $key=> $item)
                        <tr>
                            <td>{{ $key+1}}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->users->name }}</td>
                            <td>{{ $item->months->name }}</td>
                            <td>{{ $item->in_time }}</td>
                            <td>{{ $item->out_time }}</td>
                            <td>
                                <a class="btn btn-success" href=""><i class="las la-edit"></i></a>
                                <a class="btn btn-danger" href=""><i class="las la-trash"></i></a>

                            </td>
                            <td>
                                @if ($item->status == 1)
                                    <a class="btn btn-danger" href=""></i>Absent</a>
                                @else
                                    @if ($item->status == 0)
                                        <a class="btn btn-success" href="">Present</i></a>
                                    @endif
                                @endif


                            </td>
                        </tr>
                    @endforeach












                </tbody>
            </table>
        </div>
    </div>
@endsection

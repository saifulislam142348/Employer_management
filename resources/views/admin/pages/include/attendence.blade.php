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
                        <th>Attendences</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($attendence->count() > 0)
                        @foreach ($attendence as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td>{{ $item->month}}</td>
                                <td>{{ $item->in_time }}</td>
                                <td>{{ $item->out_time }}</td>

                                <td>
                                    @if ($item->status == 1)
                                        <a class="btn btn-danger" href=""></i>Out Time</a>
                                    @else
                                        @if ($item->status == 0)
                                            <a class="btn btn-success" href="">In Time</i></a>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ url('attendence/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="100%" style="text-align: center;">Not Found!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
    
        </div>
    </div>
@endsection

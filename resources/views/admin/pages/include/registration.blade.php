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
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>

                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th> Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registration as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            @if ($item->gender == 1)
                                <td><span>male</span></td>
                            @else
                                <td><span>female</span></td>
                            @endif
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                          <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                          <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                            <td colspan="2">
                                <a class="btn btn-success" href=""><i class="las la-edit"></i></a>
                                 <a class="btn btn-danger" href=""><i class="las la-trash"></i></a>
                            </td>
                            <td>
                                @if ($item->status == 0)
                                    <a class="btn btn-danger" href="">inactive</i></a>
                                @else
                                    <a class="btn btn-success" href="">active</i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

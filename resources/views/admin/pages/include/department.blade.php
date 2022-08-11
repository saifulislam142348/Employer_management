@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Department List</b> </h1>


        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#departmentModal">
            Department Create
        </button>

        @include('form.relationCreate')

        @include('form.departmentCreate')
        <div class="jumbotron">

            y

            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th> Department name</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($department as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                          <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                          <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                            <td>{{ $item->status }}</td>
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

@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Designation List</b> </h1>
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#designationModal">
            Designation create
        </button>
        @include('form.relationCreate')
        @include('form.designationCreate')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th>Status</th>
                        <th>Action</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach ($designation as $item)
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

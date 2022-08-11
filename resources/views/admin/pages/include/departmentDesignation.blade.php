@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Designation List</b> </h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Relation Add
        </button>

        @include('form.departmentDesignationCreate')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Create_by</th>
                        <th>Update_by</th>

                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($relation as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->departments->name }}</td>
                            <td>{{ $item->designations->name }}</td>
                            <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                            <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                            <td>
                                <a class="btn btn-success" href=""><i class="las la-trash"></i></a>
                                <a class="btn btn-danger" href=""><i class="las la-edit"></i></a>
                            </td>
                            <td>

                                @if ($item->status == 0)
                                    <a class="btn btn-danger" href="">inactive</a>
                                @else
                                    <a class="btn btn-success" href="">active</a>
                                @endif


                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

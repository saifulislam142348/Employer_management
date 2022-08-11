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
                        <th>Status</th>
                        <th>Action</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach ($relation as $item)
                 
                        @if ($item->count() > 0)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->department_id }}</td>
                                <td>{{ $item->designation_id }}</td>
                                <td>{{ $item->create_by }}</td>
                                <td>{{ $item->update_by }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a class="btn btn-success" href=""><i class="las la-trash"></i></a>
                                    <a class="btn btn-danger" href=""><i class="las la-edit"></i></a>
                                </td>
                            </tr>
                         
                                
                            @else
                            <span alert alert-danger> no founds</span>
                                
                            
                        @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

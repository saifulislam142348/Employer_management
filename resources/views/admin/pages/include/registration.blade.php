@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b> Registration List</b> </h1>
        <div class="d-flex flex-row bd-highlight mb-4">
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#registrationModal">
                    Registration create
                </button>
                @include('form.registrationCreate')
            </div>
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#employeeModal">
                    Employee create
                </button>
                @include('form.employeeCreate')
            </div>


            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#bonusModal">
                    Bonus create
                </button>
                @include('form.bonusCreate')
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                        data-bs-target="#departmentModal">
                        Department Create
                    </button>
                    @include('form.departmentCreate')
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                        data-bs-target="#designationModal">
                        Designation create
                    </button>
                    @include('form.designationCreate')
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Relation Add
                    </button>
                    @include('form.departmentDesignationCreate')
                </div>
            </div>

        </div>
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
                        <th colspan="2" style="text-align: center;">Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($registration->count() > 0)
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
                                <td>



                                    <a class="btn btn-success" data-toggle="modal" data-target="#registrationEditModal"
                                        href="{{ url('form.edit.registration/' . $item->id) }}"><i
                                            class="las la-edit"></i></a>
                                    @include('form.edit.registration')




                                <td>

                                    <form action="{{ url('registration/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>

                                    </form>

                                </td>
                                </td>
                                <td>
                                    @if ($item->status == 0)
                                        <a class="btn btn-danger"
                                            href="{{ url('statusChange/' . $item->id) }}">inactive</i></a>
                                    @else
                                        <a class="btn btn-success"
                                            href="{{ url('statusChange/' . $item->id) }}">active</i></a>
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                       
                    @else
                        <tr>
                            <td colspan="100%" style="text-align: center;">Not Found!</td>
                            not found
                            </td>
                        </tr>
                    @endif
                </tbody>
             
            </table>
           {!! $registration->links() !!} 
        </div>
    
      
    </div>
  
@endsection

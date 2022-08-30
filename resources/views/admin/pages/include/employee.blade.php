@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Employees List</b> </h1>
        <div class="d-flex flex-row bd-highlight mb-4">

            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#employeeModal">
                    Employee create
                </button>
                @include('form.employeeCreate')
            </div>
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#registrationModal">
                    Registration create
                </button>
                @include('form.registrationCreate')
            </div>
           
            <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#bonusModal">
                    Bonus create
                </button>
                @include('form.bonusCreate')
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#departmentModal">
                        Department Create
                    </button>
                    @include('form.departmentCreate')
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#designationModal">
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
        <div class="jumbotron">
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr> <th>#</th>
                        <th>User ID</th>
                        <th>name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Salary</th>
                        <th> Join month</th>
                        <th> Join time</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($employees->count() > 0)
                        @foreach ($employees as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->users->name }}</td>
                                {{-- {{dd($item->departments->name)}} --}}
                                <td>{{ $item->departments->name }}</td>
                                <td>{{ $item->designations->name }}</td>
                               
                                {{-- <td>{{ $item->month }}</td> --}}
                                <td>{{ $item->join_date }}</td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                                <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                                <td>
                                    <a class="btn btn-success up_employee" data-toggle="modal" data-target="#employeeEditModal"
                                        href="" 
                                        data-id="{{$item->id}}" 
                                        data-user_id="{{$item->user_id}}"
                                        data-department_id="{{ $item->departments->name }}"
                                        data-designation_id="{{ $item->designations->name }}"
                                        ><i class="las la-edit"></i></a>
                                    @include('form.edit.employee')
                                <td>

                                    <form action="{{ url('employee/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>

                                    </form>

                                </td>
                                </td>
                                <td>
                                    @if ($item->status == 0)
                                        <a class="btn btn-danger"
                                            href="{{ url('employeeStatus/' . $item->id) }}">inactive</i></a>
                                    @else
                                        <a class="btn btn-success"
                                            href="{{ url('employeeStatus/' . $item->id) }}">active</i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="100%" style="text-align: center;">Not Found!</td>
                         
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
            {!! $employees->links() !!} 
        </div>
    </div>
    @section('scripts')
  @include('jquery.employeeUpdate')  
  @endsection
@endsection

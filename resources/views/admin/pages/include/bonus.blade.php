@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Bonus List</b> </h1>
        <div class="d-flex flex-row bd-highlight mb-4">
            <div class="p-2 bd-highlight">
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#bonusModal">
                        Bonus create
                    </button>
                    @include('form.bonusCreate')
                </div>
                <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                        data-bs-target="#registrationModal">
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

      
    </div>
@endsection

@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Salary Prepared List</b> </h1>
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#salaryPreparedCreateModal">
           Bonus Add
        </button>
        @include('form.salaryPreparedCreate')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th> Month</th>
                        <th> Month Salary</th>
                        <th> Month bonus</th>
                        <th> Total Salary</th>
                        <th> Join time</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($salaryPrepared->count() > 0)
                        @foreach ($salaryPrepared as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->users->name }}</td>
                                {{-- {{dd($item->departments->name)}} --}}
                                <td>{{ $item->departments->name }}</td>
                                <td>{{ $item->designations->name }}</td>
                                <td>{{ $item->months->name }}</td>
                                 <td>{{ $item->bonus->bonus}}</td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                                <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                                <td>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#employeeEditModal"
                                        href=""><i class="las la-edit"></i></a>
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
                            not found
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
@endsection

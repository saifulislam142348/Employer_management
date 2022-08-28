@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')


    <h1 style="text-align: center;"><b>Salary Prepared List</b> </h1>
    <div class="p-2 bd-highlight">
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#salaryPreparedCreateModal">
            Salary Prepared
        </button>
        @include('form.salaryPreparedCreate')
    </div>


    @foreach ($salaryPrepared as $key => $salary)
        <table class="table  table-bordered table-hover">
            <p class="text-center"><span class="alert alert-danger">{{ $salary->month }}</span></p>
            <thead class="bg-dark text-success">
                <th>#</th>
                <th>User_id</th>
                <th>name</th>
                <th>Department</th>
                <th>Designation</th>
                <th>salary</th>
                <th>Bonus</th>
                <th>Total Salary</th>
                <th>Create_by</th>
                <th>Update_by</th>
                <th>Status</th>
            </thead>
            <tbody>

                <td> {{ $key + 1 }}</td>
                <td> {{ $salary->users->id }}</td>
                <td> {{ $salary->users->name }}</td>

                <td>{{ $salary->users->employees->departments->name }}</td>
                <td>{{ $salary->users->employees->designations->name }}</td>

                   

                @if ($salary->users->bonuses[0]->user_id == $salary->user_id &&
                    $salary->month == $salary->users->bonuses[0]->month && $salary->users->bonuses[0]->status==1 )
                     <td>{{ $salary->salary }}</td>
                    <td>{{ $salary->users->bonuses[0]->bonus }}</td>
                    <td>{{ $salary->salary + $salary->users->bonuses[0]->bonus }}</td>
                @else
                    <td>{{ $salary->salary }}</td>
                    <td>0</td>
                    <td>{{ $salary->salary + 0 }}</td>
                @endif


                <td>{{ $salary->create_by }}</td>
                <td>{{ $salary->update_by }}</td>
                <td>
                    @if ($salary->status == 0)
                        <a class="btn btn-danger" href="{{ url('salaryStatusUpdate/' . $salary->id) }}">inactive</i></a>
                    @else
                        <a class="btn btn-success" href="{{ url('salaryStatusUpdate/' . $salary->id) }}">active</i></a>
                    @endif
                </td>


            </tbody>
        </table>
    @endforeach
@endsection

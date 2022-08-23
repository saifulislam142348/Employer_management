@extends('layouts.layout')
@section('content')
    @include('user.pages.include.userHeader')
    <h1 class="text-center"><b>All Employees</b> </h1>
    <div class="jumbotron">
      
        <table class="table  table-bordered  table-dark">
            <thead>
                <tr>
                    <td class="text-danger bg-light">#</td>
                    <th>User ID</th>
                    <th>name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th> Join month</th>
                    <th> Join time</th>
                    <th>Create_by</th>
                    <th>Update_by</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if ($allEmployees->count() > 0)
                    @foreach ($allEmployees as $key=> $item)
                        <tr>
                            <td class="text-danger bg-light">{{$key+1}}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->users->name }}</td>
                            {{-- {{dd($item->departments->name)}} --}}
                            <td>{{ $item->departments->name }}</td>
                            <td>{{ $item->designations->name }}</td>
                            <td>{{ $item->salary }}</td>
                            <td>{{ $item->month }}</td>
                            <td>{{ $item->join_date }}</td>
                            <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                            <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                            </td>
                            <td>
                                <a class="btn btn-success">join</i></a>
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
    </div>
@endsection

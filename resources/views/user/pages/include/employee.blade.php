@extends('layouts.layout')
@section('content')
    @include('user.pages.include.userHeader')

    <div class="jumbotron">
        <table class="table table-striped table-bordered table-hover table-dark">
            <thead>
                <tr>
                    <th>Id</th>
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
                    @foreach ($allEmployees as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
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

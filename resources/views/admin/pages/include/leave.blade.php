@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Leave List</b> </h1>
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#leaveModal">
            Leave create
        </button>
        @include('form.leaveCreate')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>name</th>
                        <th> Leave Month</th>
                        <th> Present Condition/status</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($leaves->count() > 0)
                        @foreach ($leaves as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td>{{ $item->months->name }}</td>
                                <td>
                                    @if ($item->leave == 1)
                                        <a class="btn btn-danger" href="">leave</a>
                                    @else
                                        <a class="btn btn-success" href="">join</a>
                                    @endif
                                </td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                                <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                                <td>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#leaveEditModal"
                                        href=""><i class="las la-edit"></i></a>
                                    @include('form.edit.leave')
                                <td>

                                    <form action="{{ url('leave/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>

                                    </form>

                                </td>
                                </td>
                                <td>
                                    @if ($item->status == 0)
                                        <a class="btn btn-danger"
                                            href="{{ url('leaveStatus/' . $item->user_id) }}">inactive</i></a>
                                    @else
                                        <a class="btn btn-success"
                                            href="{{ url('leaveStatus/' . $item->user_id) }}">active</i></a>
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

@extends('layouts.layout')
@section('content')

    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Department List</b> </h1>


        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#departmentModal">
            Department Create
        </button>

        @include('form.relationCreate')

        @include('form.departmentCreate')
        <div class="jumbotron">


            <table class="table table-striped table-bordered table-hover table-dark">
                <thead class="bg-light">
                    <tr>
                        <th>Id</th>
                        <th> Department name</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th>Action</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($departments->count() > 0)
                        @foreach ($departments as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                                <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>

                                <td>
                                    <a class="btn btn-success  up_department" data-toggle="modal" data-target="#departmentEditModal"
                                        href="" data-id="{{$item->id}}" data-name="{{$item->name}}">
                                        <i class="las la-edit"></i>
                                    </a>
                                    @include('form.edit.department')
                                <td>

                                    <form action="{{ url('department/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>

                                    </form>

                                </td>
                                </td>
                                <td>
                                    @if ($item->status == 0)
                                        <a class="btn btn-danger"
                                            href="{{ url('departmentStatus/' . $item->id) }}">inactive<a>
                                            @else
                                                <a class="btn btn-success"
                                                    href="{{ url('departmentStatus/' . $item->id) }}">active<a>
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
  @section('scripts')
  @include('jquery.departmentUpdate')  
  @endsection
@endsection

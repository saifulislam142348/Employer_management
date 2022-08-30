@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Designation List</b> </h1>
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#designationModal">
            Designation create
        </button>
        @include('form.relationCreate')
        @include('form.designationCreate')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($designations->count() > 0)
                        @foreach ($designations as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                                <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>

                                <td>

                                    <a class="btn btn-success up_designation" data-toggle="modal" data-target="#designationEditModal"
                                        href="" data-id="{{$item->id}}" data-name="{{$item->name}}"><i class="las la-edit"></i></a>
                                    @include('form.edit.designation')
                                <td>

                                    <form action="{{ url('designation/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>

                                    </form>

                                </td>
                                </td>
                                <td>
                                    @if ($item->status == 0)
                                        <a class="btn btn-danger"
                                            href="{{ url('designationStatus/' . $item->id) }}">inactive<a>
                                            @else
                                                <a
                                                    class="btn btn-success"href="{{ url('designationStatus/' . $item->id) }}">active<a>
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
  @include('jquery.designationUpdate')  
  @endsection
@endsection

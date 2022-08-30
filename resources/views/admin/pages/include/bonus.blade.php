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
        <div class="jumbotron">
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Month</th>
                        <th>Bonus Title</th>
                        <th>Bonus Amonut</th>
                        <th>Create_by</th>
                        <th>Status</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($bonus->count() > 0)
                        @foreach ($bonus as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->users->name }}</td>
                                {{-- <td>{{ $item->users->employees->departments->name }}</td>
                                <td>{{ $item->users->employees->designations->name }}</td>  --}}
                                <td>{{ $item->month }}</td>
                                <td>{{ $item->bonus_title }}</td>
                               
                                <td>{{ $item->bonus }}</td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>

                                <td>
                                    @if ($item->status == 1)
                                        <a class="btn btn-success" href="{{url('bonusStatus/'.$item->id)}}"></i>Active</a>
                                    @else
                                        @if ($item->status == 0)
                                            <a class="btn btn-danger" href="{{url('bonusStatus/'.$item->id)}}">Inactive</i></a>
                                        @endif
                                    @endif
                                </td>
                                <td>

                                    <a class="btn btn-success up_bonus" data-toggle="modal" data-target="#bonusEditModal"
                                        href=""
                                         data-id="{{$item->id}}"
                                          data-bonus_month="{{$item->month}}"
                                          data-bonus_title="{{$item->bonus_title}}"
                                          data-bonus="{{$item->bonus}}"
                                          ><i class="las la-edit"></i></a>
                                    @include('form.edit.bonus')
                                </td>
                                <td>

                                    <form action="{{ url('bonus/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="100%" style="text-align: center;">Not Found!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {!! $bonus->links() !!}
        </div>

    </div>
    @section('scripts')
  @include('jquery.bonusUpdate')  
  @endsection
@endsection

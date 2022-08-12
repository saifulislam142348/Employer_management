@extends('layouts.layout')
@section('content')
    @include('admin.pages.include.header')
    <div class="container">
        <h1 style="text-align: center;"><b>Bonus List</b> </h1>
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#bonusModal">
            Bonus create
        </button>
        @include('form.bonusCreate')
        <div class="jumbotron">



            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        {{-- <th>Bonus Title</th> --}}
                        <th>Bonus </th>
                        <th>Bonus month</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
                        <th colspan="2" style="text-align: center;">Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($bonus->count() > 0)
                        @foreach ($bonus as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->users->name }}</td>
                                {{-- <td>{{ $item->bonus_title }}</td> --}}
                                <td>{{ $item->bonus }}</td>
                                <td>{{ $item->months->name }}</td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                                <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                                <td>

                                    <a class="btn btn-success" href=""><i class="las la-edit"></i></a>
                                <td>

                                    <form action="{{ url('bonus/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>

                                    </form>

                                </td>
                                </td>
                                <td>
                                    @if ($item->status == 0)
                                        <a class="btn btn-danger "
                                            href="{{ url('bonusStatus/' . $item->user_id) }}">inactive</a>
                                    @else
                                        <a class="btn btn-success" href="">active</a>
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

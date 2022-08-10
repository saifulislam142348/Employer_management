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

                        <th>Status</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $item)
                
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->user_id }}</td>
                            {{-- <td>{{ $item->bonus_title }}</td> --}}
                            <td>{{ $item->bonus}}</td>
                            <td>{{ $item->month_id }}</td>
                            <td>{{ $item->create_by }}</td>
                            <td>
                                <a class="btn btn-success" href="">active</i></a>
                                <a class="btn btn-danger" href="">inactive</i></a>
                            </td>

                            <td>
                                <a class="btn btn-success" href=""><i class="las la-trash"></i></a>
                                <a class="btn btn-danger" href=""><i class="las la-edit"></i></a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

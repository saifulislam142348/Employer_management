@extends('layouts.layout')
@section('content')
    @include('user.pages.include.userHeader')


    <div class="container">
        <h1 style="text-align: center;"><b>Bonus List</b> </h1>
        <div class="jumbotron">
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                    <tr>
                        <th> Employee Id</th>
                        <th>name</th>
                        {{-- <th>Bonus Title</th> --}}
                        <th>Bonus Title </th>
                        <th>Bonus </th>
                        <th>Bonus month</th>
                        <th>Create_by</th>
                        <th>Update_by</th>
         
                    </tr>
                </thead>
                <tbody>
                    @if ($bonus->count() > 0)
                        @foreach ($bonus as $item)
                            <tr>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->users->name }}</td>
                                {{-- <td>{{ $item->bonus_title }}</td> --}}
                                <td>{{ $item->bonus_title }}</td>
                                <td>{{ $item->bonus }}</td>
                                <td>{{ $item->month }}</td>
                                <td>by <span style="color: aqua">/{{ $item->create_by }}</span></td>
                                <td>by <span style="color: aqua">/{{ $item->update_by }}</span></td>
                               
                            </tr>
                        @endforeach
                    @else
                        <tr>

                            <td colspan="100%" style="text-align: center;">Not Found!</td>

                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


@endsection

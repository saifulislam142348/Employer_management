@extends('layouts.layout')
@section('content')
    @include('user.pages.include.userHeader')

    {{-- many time in out --}}

    <div class="jumbotron">

        @if ( !$attendence->count() > 0)
            <div class="d-flex p-2 bd-highlight justify-content-center">
                @include('form.userintime')

            </div>
        @else
            @if ( !$attendence->first()->status == 1)
                <div class="d-flex p-2 bd-highlight justify-content-center">
                    @include('form.userouttime')
                </div>
            @else
                <div class="d-flex p-2 bd-highlight justify-content-center">
                    @include('form.userintime')

                </div>
            @endif
        @endif
        <table class="table table-striped table-bordered table-hover table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>Attendences</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($attendence->count() > 0)
                    @foreach ($attendence as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->users->name }}</td>
                            <td>{{ $item->month }}</td>
                            <td>{{ $item->in_time }}</td>
                            <td>{{ $item->out_time }}</td>

                            <td>
                                @if ( $item->status == 1)
                                    <a class="btn btn-danger" href=""></i>Out Time</a>
                                @else
                                    @if ($item->status == 0)
                                        <a class="btn btn-success" href="">In Time</i></a>
                                    @endif
                                @endif
                            </td>
                            @if (Auth::user()->id == $item->user_id)
                                <td>
                                    <form action="{{ url('attendence/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>
                                    </form>
                                </td>
                            @endif
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

    {{-- one time in or out --}}
    <div class="jumbotron">

        @if ( !$attendence->count() > 0)
            <div class="d-flex p-2 bd-highlight justify-content-center">
                @include('form.userintime')

            </div>
        @else
            @if ( !$attendence->first()->status == 1)
                <div class="d-flex p-2 bd-highlight justify-content-center">
                    @include('form.userouttime')
                </div>
            @endif
        @endif
        <table class="table table-striped table-bordered table-hover table-dark">
            <thead>
                <tr>
                    <th>#</th> 
                    <th>Id</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>Attendences</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($attendence->count() > 0)
                    @foreach ($attendence as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->users->name }}</td>
                            <td>{{ $item->month }}</td>
                            <td>{{ $item->in_time }}</td>
                            <td>{{ $item->out_time }}</td>

                            <td>
                                @if ($item->status == 1)
                                    <a class="btn btn-danger" href=""></i>Out Time</a>
                                @else
                                    @if ($item->status == 0)
                                        <a class="btn btn-success" href="">In Time</i></a>
                                    @endif
                                @endif
                            </td>
                            @if (Auth::user()->id == $item->user_id)
                                <td>
                                    <form action="{{ url('attendence/delete/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="las la-trash"></i></button>
                                    </form>
                                </td>
                            @endif

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
@endsection

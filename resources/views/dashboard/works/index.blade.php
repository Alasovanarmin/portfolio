@extends('dashboard.layout.layout')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Work experiences</h1>
        </div>

        @if (session()->get('success'))
            <div class="alert alert-primary">
                <ul>
                    {{ session()->get('success') }}
                </ul>
            </div>
        @endif
        @if (session()->get('danger'))
            <div class="alert alert-primary">
                <ul>
                    {{ session()->get('danger') }}
                </ul>
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($works as $work)
                <tr>
                    <td>{{$loop->index+1 }}</td>
                    <td>{{$work->title}}</td>
                    <td>{{$work->body}}</td>
                    <td>{{$work->start_time}}</td>
                    <td>{{$work->on_going ? "on_going" : $work->end_ime}}</td>
                    <td>
                        <a href="{{route('dashboard.work.edit', $work->id)}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-pen"></i>
                        </a>
                        <a href="" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

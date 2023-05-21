@extends('dashboard.layout.layout')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Work experience</h1>
        </div>

        @if (session()->get('success'))
            <div class="alert alert-primary">
                <ul>
                    {{ session()->get('success') }}
                </ul>
            </div>
        @endif

        @if (session()->get('danger'))
            <div class="alert alert-danger">
                <ul>
                    {{ session()->get('danger') }}
                </ul>
            </div>
        @endif

        <form action="{{route('dashboard.work.update',$work->id)}}" method="POST">
            @csrf
            <div class="form-group">
                Title
                <input type="text" name="title" class="form-control" value="{{$work->title}}">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    Start Time
                    <input type="datetime-local" name="start_time" class="form-control" value="{{$work->start_time}}">
                </div>
                <div class="form-group col-md-6">
                    End Time
                    <input type="datetime-local" name="end_time" class="form-control" value="{{$work->end_time}}">
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="on_going" @if($work->on_going) checked @endif>
                On going
            </div>
            <div class="form-group">
                Body
                <textarea class="form-control" name="body" rows="6">{{$work->body}}</textarea>
            </div>

            <br>

            <button type="submit" class="btn-block btn-primary btn-sm">Update</button>
        </form>
    </div>
@endsection


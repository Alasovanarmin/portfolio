@extends("dashboard.layout.layout")
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Work experience</h1>
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

        <form action="{{ route("dashboard.work.store") }}" method="POST">
            @csrf
            <div class="form-group">
                Title
                <input type="text" name="title" class="form-control">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    Start date
                    <input type="datetime-local" name="start_time" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    End date
                    <input type="datetime-local" name="end_time" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="on_going">
                On going
            </div>
            <div class="form-group">
                Body
                <textarea class="form-control" name="body" rows="6"></textarea>
            </div>

            <br>

            <button type="submit" class="btn-block btn-primary btn-sm">Save</button>
        </form>
    </div>

@endsection

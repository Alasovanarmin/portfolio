@extends('dashboard.layout.layout')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Project create</h1>
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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route("dashboard.project.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    Title
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    Url
                    <input type="text" name="url" class="form-control">
                </div>
            </div>
            <div class="form-group">
                Body
                <textarea class="form-control" name="body" rows="6"></textarea>
            </div>

            <div class="form-group">
                Date
                <input type="datetime-local" name="date" class="form-control">
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    Tag 1
                    <input type="text" name="tags[]" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    Tag 2
                    <input type="text" name="tags[]" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    Tag 3
                    <input type="text" name="tags[]" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    Tag 4
                    <input type="text" name="tags[]" class="form-control">
                </div>
            </div>

            <div class="form-group">
                Photos
                <input type="file" name="photos[]" class="form-control-file" multiple>
            </div>

            <br>

            <button type="submit" class="btn-block btn-primary btn-sm">Save</button>
        </form>
    </div>

@endsection

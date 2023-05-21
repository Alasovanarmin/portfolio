@extends('dashboard.layout.layout')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Skills Trash Page</h1>
        </div>

        @if (session()->get('success'))
            <div class="alert alert-primary">
                <ul>
                    {{ session()->get('success') }}
                </ul>
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Percent</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->percent }}%</td>
                    <td>{{ $skill->body }}</td>
                    <td>
                        <a href="{{route('dashboard.skill.trash-back',$skill->id)}}" class="btn btn-sm btn-warning">
                            Restore
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection


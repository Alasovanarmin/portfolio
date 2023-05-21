@extends("dashboard.layout.layout")

@section("content")

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Skills
                <a href="{{ route("dashboard.skills.trash") }}" class="btn btn-sm btn-info">Trash</a>
            </h1>
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

        <table class="table table-hover table-dark">
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
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->percent }}%</td>
                    <td>{{ $skill->body }}</td>
                    <td>
                        <a href="{{route("dashboard.skill.edit", $skill->id)}}" class="btn btn-sm btn-primary">
                            <i class="fa fa-pen"></i>
                        </a>
                        <a href="{{route("dashboard.skill.delete", $skill->id)}}" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection

@extends("dashboard.layout.layout")

@section("content")
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Skill edit</h1>
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

        <form action="{{route("dashboard.skill.update", $skill->id)}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    Skill
                    <input type="text" name="name" class="form-control" value="{{$skill->name}}">
                </div>
                <div class="form-group col-md-6">
                    Percent %
                    <input type="text" name="percent" class="form-control" value="{{$skill->percent}}">
                </div>
            </div>
            <div class="form-group">
                Body
                <textarea class="form-control" name="body" rows="6">{{$skill->body}}</textarea>
            </div>

            <br>

            <button type="submit" class="btn-block btn-primary btn-sm">Update</button>
        </form>
    </div>

@endsection

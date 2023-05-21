<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectPhoto;
use App\Models\ProjectTag;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)// Request http den gelen melumatlar.
    {
        $this->validate($request, [
            'title' => 'required',
            'photos' => "array|required",
            'photos.*' => "nullable|image|mimes:jpg,jpeg,png",
            'tags' => 'array|required',
            'tags.*' => "nullable|string|max:100"
        ]);

        $project = Project::query()
            ->create([
                'title' => $request->title,
                'url' => $request->url,
                'body' => $request->body,
                'date' => $request->date
            ]);

        $photos = $request->photos ?? [];
        foreach ($photos as $photo) {
            $fileName = time() . rand(1, 1000) . '.' . $photo->extension();
            $fileNameWithUpload = 'storage/uploads/project/' . $fileName;

            $photo->storeAs('public/uploads/project/', $fileName);

            ProjectPhoto::query()
                ->create([
                    'project_id' => $project->id, //2
                    'photo' => $fileNameWithUpload
                ]);
        }

        $tags = $request->tags ?? [];
        foreach ($tags as $tag) {
            if ($tag != null) {
                ProjectTag::query()
                    ->create([
                        'project_id' => $project->id,
                        'tag' => $tag
                    ]);
            }
        }

        return redirect()->route('dashboard.project.create')->with('success', "created successfully");
    }

    public function index()
    {
        $projects = Project::query()
            ->with('tags', 'photos')
            ->get();

        return view('dashboard.projects.index', compact('projects'));
    }

    public function edit($id, Request $request)
    {
        $project = Project::query()
            ->where('id', $id)
            ->with('photos', 'tags')//eager-loading- yuklenme.arxada yazdigimiz modelin methodunu cagirir.
            ->first();

        return view('dashboard.projects.edit', compact('project'));
    }

    public function delete($project_id)
    {
        Project::query()
            ->where('id', $project_id)
            ->delete();

        ProjectPhoto::query()
            ->where("project_id", $project_id)
            ->delete();

        ProjectTag::query()
            ->where('project_id', $project_id)
            ->delete();

        return redirect()->route('dashboard.projects');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tags' => 'array|required',
            'tags.*' => "nullable|string|max:100"
        ]);
        Project::query()
            ->update([
                'title' => $request->title,
                'body' => $request->body,
                'url' => $request->url,
                'date' => $request->date
            ]);
        ProjectTag::query()
            ->where('project_id', $id)
            ->delete();
        $tags = $request->tags ?? [];
        foreach ($tags as $tag) {
            if ($tag != null) {
                ProjectTag::query()
                    ->create([
                        'project_id' => $id,
                        'tag' => $tag
                    ]);
            }
        }
        return redirect()->route('dashboard.projects')->with('success', "Updated successfully");
    }

    public function photoIndex($project_id, Request $request)
    {
        $photos = ProjectPhoto::query()
            ->where('project_id', $project_id)
            ->get();

        return view('dashboard.projects.photo', compact('photos', 'project_id'));
    }

    public function photoDelete($photo_id)
    {
        ProjectPhoto::query()
            ->where('id', $photo_id)
            ->delete();

        return redirect()->route('dashboard.projects')->with('success', "Deleted successfully");
    }

    public function photoStore($project_id, Request $request)
    {
        $this->validate($request, [
            'photos' => "array|required",
            'photos.*' => "nullable|image|mimes:jpg,jpeg,png",
        ]);

        $photos = $request->photos ?? [];
        foreach ($photos as $photo) {
            $fileName = time() . rand(1, 1000) . '.' . $photo->extension();
            $fileNameWithUpload = 'storage/uploads/project/' . $fileName;

            $photo->storeAs('public/uploads/project/', $fileName);

            ProjectPhoto::query()
                ->create([
                    'project_id' => $project_id,
                    'photo' => $fileNameWithUpload
                ]);
        }

        return redirect()->route('dashboard.project.photo',$project_id)->with("success","Photo created successfully");

    }
}

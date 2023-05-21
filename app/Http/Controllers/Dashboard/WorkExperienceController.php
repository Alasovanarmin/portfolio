<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function create()
    {
        return view("dashboard.works.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'nullable',
            'start_time' => 'required',
            'end_time' => 'nullable'
        ]);

        WorkExperience::query()
            ->create([
                'title' => $request->title,
                'body' => $request->body,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'on_going' => $request->on_going ? 1 : 0
            ]);
        return redirect()->route("dashboard.work.create")->with("success", "created successfully");
    }

    public function index()
    {
        $works = WorkExperience::query()
            ->OrderByDesc("id")
            ->get();

        return view("dashboard.works.index", compact('works'));
    }


    public function edit($id)
    {
        $work = WorkExperience::query()
            ->where('id',$id)
            ->first();

        return view("dashboard.works.edit",compact('work'));
    }


    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'nullable',
            'start_time' => 'required',
            'end_time' => 'nullable'
        ]);

        WorkExperience::query()
            ->where("id",$id)
            ->update([
                'title' => $request->title,
                'body' => $request->body,
                'start_time' => $request->start_time,
                'end_time' => $request ->end_time,
                'on_going' => $request ->on_going ? 1 : 0
            ]);

        return redirect()->route('dashboard.works')->with("success","updated successfully");
    }

}

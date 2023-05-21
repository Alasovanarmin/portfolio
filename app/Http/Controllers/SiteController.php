<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $about = About::query()
            ->first();
        $skills = Skill::query()
            ->get();
        $works = WorkExperience::query()
            ->get();
        $projects = Project::query()
            ->with('photo')// eager loading...
            ->get();

        return view('site.index',compact('about','skills','works','projects'));
    }

    public function message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'subject' => 'required|string|max:90',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        Contact::query()
            ->create([
                'name' => $request->name,
                'subject' => $request->subject,
                'email' => $request->email,
                'message' => $request->message
            ]);
        return redirect()->route('home');
    }
}

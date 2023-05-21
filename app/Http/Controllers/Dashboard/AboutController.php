<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::query()->first();

        return view("dashboard.about", compact("about"));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            "email"  => "required|email",
            "photo"  => "nullable|image|mimes:jpg,jpeg,png",
        ]);

        About::query()
            ->first()
            ->update([
                'email' => $request->email,
                'phone' => $request->phone,
                'summary' => $request->summary,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'github' => $request->github,
                'linkedin' => $request->linkedin,
            ]);

            if($request->file('photo')){
                $fileName = time() . rand(1, 1000) . '.' . $request->photo->extension();
                $fileNameWithUpload = 'storage/uploads/about/' . $fileName;

                $request->photo->storeAs('public/uploads/about/', $fileName);

                About::query()
                    ->first()
                    ->update([
                        'photo' => $fileNameWithUpload
                    ]);
            }

            return redirect()->route("dashboard.about")->with('success', 'Successfully updated');
    }
}

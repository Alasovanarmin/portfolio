<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthenticationController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\SkillController;
use App\Http\Controllers\Dashboard\WorkExperienceController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Dashboard\MessageController;

Route::get("/dashboard/login", [AuthenticationController::class, 'loginPage'])->name("dashboard.loginPage");
Route::post("/dashboard/login", [AuthenticationController::class, 'login'])->name("dashboard.login");
Route::get("/dashboard/logout", [AuthenticationController::class, 'logout'])->name("dashboard.logout");

Route::group(['middleware' => 'authCheck'], function (){
    Route::get("/dashboard/home", [HomeController::class, 'index'])->name("dashboard.home");

    Route::get("/dashboard/about", [AboutController::class, 'index'])->name("dashboard.about");
    Route::post("/dashboard/about/update", [AboutController::class, 'update'])->name("dashboard.about.update");

    Route::get("/dashboard/skill/create", [SkillController::class, 'create'])->name("dashboard.skill.create");
    Route::post("/dashboard/skill/store", [SkillController::class, 'store'])->name("dashboard.skill.store");
    Route::get("/dashboard/skills", [SkillController::class, 'index'])->name("dashboard.skills");
    Route::get("/dashboard/skills/trash", [SkillController::class, 'indexTrash'])->name("dashboard.skills.trash");
    Route::get("/dashboard/skills/trash-back/{id}", [SkillController::class, 'trashBack'])->name("dashboard.skill.trash-back");
    Route::get("/dashboard/skill/delete/{id}", [SkillController::class, 'delete'])->name("dashboard.skill.delete");
    Route::get("/dashboard/skill/edit/{id}", [SkillController::class, 'edit'])->name("dashboard.skill.edit");
    Route::post("/dashboard/skill/update/{id}", [SkillController::class, 'update'])->name("dashboard.skill.update");

    Route::get("/dashboard/work/create", [WorkExperienceController::class, 'create'])->name("dashboard.work.create");
    Route::post("/dashboard/work/store", [WorkExperienceController::class, 'store'])->name("dashboard.work.store");
    Route::get("/dashboard/works", [WorkExperienceController::class, 'index'])->name("dashboard.works");
    Route::get("/dashboard/work/edit/{id}", [WorkExperienceController::class, 'edit'])->name("dashboard.work.edit");
    Route::post("/dashboard/work/update/{id}", [WorkExperienceController::class, 'update'])->name("dashboard.work.update");

    Route::get("/dashboard/project/create", [ProjectController::class, 'create'])->name("dashboard.project.create");
    Route::post("/dashboard/project/store", [ProjectController::class, 'store'])->name("dashboard.project.store");
    Route::get("/dashboard/projects", [ProjectController::class, 'index'])->name("dashboard.projects");
    Route::get("/dashboard/project/edit/{id}", [ProjectController::class, 'edit'])->name("dashboard.project.edit");
    Route::get("/dashboard/project/delete/{project_id}", [ProjectController::class, 'delete'])->name("dashboard.project.delete");
    Route::post("/dashboard/project/update/{id}", [ProjectController::class, 'update'])->name("dashboard.project.update");
    Route::get("/dashboard/project/photo/{project_id}", [ProjectController::class, 'photoIndex'])->name("dashboard.project.photo");
    Route::get("/dashboard/project/photo/delete/{photo_id}", [ProjectController::class, 'photoDelete'])->name("dashboard.project.photo.delete");
    Route::post("/dashboard/project/photo/store/{project_id}", [ProjectController::class, 'photoStore'])->name("dashboard.project.photo.store");

    Route::get("/dashboard/messages", [MessageController::class, 'index'])->name("dashboard.messages");
    Route::get("/dashboard/messages/show/{id}", [MessageController::class, 'show'])->name("dashboard.messages.show");
    Route::post("/dashboard/messages/send-mail/{id}", [MessageController::class, 'sendMail'])->name("dashboard.messages.send-mail");

    Route::post("/dashboard/change-password", [AuthenticationController::class, 'changePassword'])->name("dashboard.change-password");


});

Route::get("/", [SiteController::class, 'index'])->name("home");
Route::post("/message", [SiteController::class, 'message'])->name("home.message");

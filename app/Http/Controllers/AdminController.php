<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $service = Service::count();
        $cats = Category::count();
        $project = Project::count();
        $team = Team::count();
        return view('backend.home', compact('service', 'cats', 'project', 'team' ));
    }
}

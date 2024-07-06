<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Clients;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $service = Service::all();
        $clients= Clients::all();
        $cats = Category::all();
        $project = Project::all();
        return view('frontend.home', compact('service', 'clients', 'cats', 'project' ));
    }
    public function about()
    {
        return view('frontend.about');
    }
    
    public function project()
    {   
        $project = Project::all();
        $cats = Category::all();
        return view('frontend.project',compact('project', 'cats'));
    }
}

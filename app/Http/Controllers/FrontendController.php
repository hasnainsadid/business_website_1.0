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
        $team = Team::all();

        $service_c = Service::count();
        $clints_c = Clients::count();
        $project_c = Project::count();
        $team_c = Team::count();
        return view('frontend.home', compact('service', 'clients', 'cats', 'project', 'team', 'service_c', 'clints_c', 'project_c', 'team_c'));
    }
    public function about()
    {
        $service_c = Service::count(); 
        $clints_c = Clients::count();
        $project_c = Project::count();
        $team_c = Team::count();

        return view('frontend.about', compact('service_c', 'clints_c', 'project_c', 'team_c'));
    }
    
    public function project()
    {   
        $project = Project::all();
        $cats = Category::all();
        return view('frontend.project',compact('project', 'cats'));
    }

    public function team()
    {   
        $team = Team::all();
        return view('frontend.team',compact('team'));
    }

    public function service()
    {   
        $service = Service::all();
        $clients= Clients::all();
        return view('frontend.service',compact('clients','service'));
    }
}
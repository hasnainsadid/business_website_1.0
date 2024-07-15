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
        return view('frontend.home', compact('service', 'clients', 'cats', 'project','team' ));
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

    public function contact()
    {
        return view('frontend.contact');
    }
}
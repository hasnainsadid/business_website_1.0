<?php

namespace App\Http\Controllers;

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
      
        return view('frontend.home', compact('service', 'clients' ));
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function project()
    {   $project = Project::all();
        return view('frontend.project',compact('project'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Clients;
use App\Models\Project;
use App\Models\Team;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $service = Service::all();
        $clients= Clients::all();
        $team= Team::all();

      
        return view('frontend.home', compact('service', 'clients','team' ));
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function project()
    {   $project = Project::all();
        return view('frontend.project',compact('project'));
    }

    public function team(){

        $team =Team::all();
        return view('frontend.team',compact('team'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function srevice()
    {
        return view('frontend.srevice');
    }
}

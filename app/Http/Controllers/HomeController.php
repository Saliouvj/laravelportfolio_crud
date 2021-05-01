<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $about = About::all();
        $facts = Fact::all();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        // $services = Service::all();
        $services = Service::paginate(6);
        // $services->withPath('\#services');
        return view('home', compact('about',"facts", 'skills', 'portfolios', 'services'));
    }

    public function admin(){
        return view('backoffice.admin');
    }
}

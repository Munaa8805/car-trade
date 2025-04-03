<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testiminol;
use App\Models\Team;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(): View
    {
        $teams = Team::latest()->limit(4)->get();
        $testiminols = Testiminol::latest()->limit(4)->get();

        return view('pages.index', [
            'teams' => $teams,
            'testiminols' => $testiminols,
        ]);
    }


    public function about(): View
    {

        return view('pages.about', []);
    }


    public function contact(): View
    {
        return view('pages.contact');
    }
    public function services(): View
    {
        $services = Service::all();
        return view('service.index', [
            'services' => $services,
        ]);
    }
}

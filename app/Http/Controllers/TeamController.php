<?php
namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = Team::all();
        return view('frontend.team', compact('teamMembers'));
    }
}

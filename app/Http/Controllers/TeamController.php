<?php
namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
     public function index()
    {
        // Paginate 6 members per page
        $teamMembers = Team::paginate(8);

        return view('frontend.teams', compact('teamMembers'));
    }
}

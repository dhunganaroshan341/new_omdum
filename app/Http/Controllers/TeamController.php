<?php
namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Team;

class TeamController extends Controller
{
     public function index()
    {
        // Paginate 6 members per page
        $teamMembers = Team::paginate(8);
        $teamPageContent = Page::where('slug','team')->first();
        return view('frontend.teams', compact('teamMembers','teamPageContent'));
    }
}

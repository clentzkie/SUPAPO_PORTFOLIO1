<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index()
    {
        // Kunin ang data gamit ang Eloquent ORM
        $profile = Profile::first();
        $skills = Skill::all();
        $projects = Project::all();
        $experiences = Experience::all();
        $contacts = Contact::all();

        // Ipasa ang data sa 'welcome' blade file
        return view('welcome', compact('profile', 'skills', 'projects', 'experiences', 'contacts'));
    }
}
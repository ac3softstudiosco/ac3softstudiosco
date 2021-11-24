<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $messageCount = Contact::count();
        $serviceCount = Service::count();
        $projectCount = Project::count();
        $blogCount = Blog::count();

        return view('admin.dashboard', compact('userCount', 'messageCount', 'projectCount', 'serviceCount', 'blogCount'));
    }
}

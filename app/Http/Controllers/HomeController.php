<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalProjects = Job::count();

        $activeProjects = Job::where('status', 'Active')->count();

        $completedProjects = Job::where('status', 'Completed')->count();

        $onHoldProjects = Job::where('status', 'On Hold')->count();

        $todayProjects = Job::whereDate('created_at', today())->count();

        $totalRevenue = Job::sum('amount');

        $recentProjects = Job::latest()->take(6)->get();

        $serviceStats = Job::select('service_type', DB::raw('COUNT(*) as total'))
            ->groupBy('service_type')
            ->orderByDesc('total')
            ->get();

        return view('home', compact(
            'totalProjects',
            'activeProjects',
            'completedProjects',
            'onHoldProjects',
            'todayProjects',
            'totalRevenue',
            'recentProjects',
            'serviceStats'
        ));
    }
}
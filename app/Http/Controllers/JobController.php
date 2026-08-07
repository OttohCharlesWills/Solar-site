<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    public function index()
    {
        $jobs = Job::latest()->paginate(15);

        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'business_name' => 'nullable|string|max:255',

            'client_name' => 'required|string|max:255',

            'phone' => 'nullable|string|max:20',

            'email' => 'nullable|email',

            'location' => 'required|string|max:255',

            'service_type' => 'required|string|max:255',

            'description' => 'nullable|string',

            'progress' => 'required',

            'status' => 'required',

            'start_date' => 'required|date',

            'completion_date' => 'nullable|date',

            'assigned_to' => 'nullable|string|max:255',

            'amount' => 'nullable|numeric'

        ]);

        Job::create([

            'business_name' => $request->business_name,

            'client_name' => $request->client_name,

            'phone' => $request->phone,

            'email' => $request->email,

            'location' => $request->location,

            'service_type' => $request->service_type,

            'description' => $request->description,

            'progress' => $request->progress,

            'status' => $request->status,

            'start_date' => $request->start_date,

            'completion_date' => $request->completion_date,

            'assigned_to' => $request->assigned_to,

            'amount' => $request->amount,

            'created_by' => Auth::id()

        ]);

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job added successfully.');
    }

    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {

        $request->validate([

            'business_name' => 'nullable|string|max:255',

            'client_name' => 'required|string|max:255',

            'phone' => 'nullable|string|max:20',

            'email' => 'nullable|email',

            'location' => 'required|string|max:255',

            'service_type' => 'required|string|max:255',

            'description' => 'nullable|string',

            'progress' => 'required',

            'status' => 'required',

            'start_date' => 'required|date',

            'completion_date' => 'nullable|date',

            'assigned_to' => 'nullable|string|max:255',

            'amount' => 'nullable|numeric'

        ]);

        $job->update($request->all());

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job updated successfully.');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Job deleted successfully.');
    }

}
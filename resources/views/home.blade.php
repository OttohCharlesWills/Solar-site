@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <small class="text-muted">
                Welcome back, {{ auth()->user()->name }}
            </small>
        </div>

        <a href="{{ route('jobs.create') }}" class="btn btn-primary">
            + New Project
        </a>

    </div>


    <div class="row g-4">

        <div class="col-lg-3">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Total Projects</h6>

                    <h2>{{ $totalProjects }}</h2>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Active</h6>

                    <h2 class="text-primary">
                        {{ $activeProjects }}
                    </h2>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Completed</h6>

                    <h2 class="text-success">
                        {{ $completedProjects }}
                    </h2>

                </div>

            </div>

        </div>

        <div class="col-lg-3">

            <div class="card shadow-sm border-0">

                <div class="card-body">

                    <h6 class="text-muted">Revenue</h6>

                    <h2>₦{{ number_format($totalRevenue,2) }}</h2>

                </div>

            </div>

        </div>

    </div>


    <div class="row mt-4">

        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <strong>Recent Projects</strong>

                </div>

                <div class="table-responsive">

                    <table class="table table-hover mb-0">

                        <thead>

                        <tr>

                            <th>Client</th>

                            <th>Service</th>

                            <th>Status</th>

                            <th>Progress</th>

                            <th>Date</th>

                        </tr>

                        </thead>

                        <tbody>

                        @forelse($recentProjects as $project)

                            <tr>

                                <td>{{ $project->client_name }}</td>

                                <td>{{ $project->service_type }}</td>

                                <td>

                                    <span class="badge bg-primary">

                                        {{ $project->status }}

                                    </span>

                                </td>

                                <td>{{ $project->progress }}</td>

                                <td>{{ $project->created_at->format('d M Y') }}</td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5" class="text-center">

                                    No projects available.

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <div class="col-lg-4">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white">

                    <strong>Services Breakdown</strong>

                </div>

                <div class="card-body">

                    @foreach($serviceStats as $service)

                        <div class="d-flex justify-content-between mb-3">

                            <span>{{ $service->service_type }}</span>

                            <strong>{{ $service->total }}</strong>

                        </div>

                    @endforeach

                </div>

            </div>


            <div class="card shadow-sm border-0 mt-4">

                <div class="card-header bg-white">

                    <strong>Quick Stats</strong>

                </div>

                <div class="card-body">

                    <p>
                        Today's Projects
                        <strong class="float-end">
                            {{ $todayProjects }}
                        </strong>
                    </p>

                    <hr>

                    <p>
                        On Hold
                        <strong class="float-end">
                            {{ $onHoldProjects }}
                        </strong>
                    </p>

                    <hr>

                    <p>
                        Completed
                        <strong class="float-end">
                            {{ $completedProjects }}
                        </strong>
                    </p>

                    <hr>

                    <p>
                        Active
                        <strong class="float-end">
                            {{ $activeProjects }}
                        </strong>
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
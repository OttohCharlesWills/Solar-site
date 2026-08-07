@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">Jobs</h2>
            <small class="text-muted">
                Manage all projects and installations.
            </small>
        </div>

        <a href="{{ route('jobs.create') }}"
           class="btn btn-primary">

            + Add New Job

        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <div class="card shadow-sm border-0">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                <tr>

                    <th>#</th>

                    <th>Client</th>

                    <th>Business</th>

                    <th>Service</th>

                    <th>Location</th>

                    <th>Status</th>

                    <th>Progress</th>

                    <th>Start</th>

                    <th width="180">Action</th>

                </tr>

                </thead>

                <tbody>

                @forelse($jobs as $job)

                <tr>

                    <td>{{ $job->id }}</td>

                    <td>{{ $job->client_name }}</td>

                    <td>{{ $job->business_name ?? '-' }}</td>

                    <td>{{ $job->service_type }}</td>

                    <td>{{ $job->location }}</td>

                    <td>

                        <span class="badge bg-success">

                            {{ $job->status }}

                        </span>

                    </td>

                    <td>

                        {{ $job->progress }}

                    </td>

                    <td>

                        {{ $job->start_date }}

                    </td>

                    <td>

                        <a href="{{ route('jobs.edit',$job) }}"
                           class="btn btn-sm btn-warning">

                            Edit

                        </a>

                        <form action="{{ route('jobs.destroy',$job) }}"
                              method="POST"
                              class="d-inline">

                            @csrf

                            @method('DELETE')

                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this job?')">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="9"
                        class="text-center py-5">

                        No jobs added yet.

                    </td>

                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <div class="mt-4">

        {{ $jobs->links() }}

    </div>

</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container py-4">

<div class="card shadow">

<div class="card-header">

<h3>Add New Job</h3>

</div>

<div class="card-body">

<form action="{{ route('jobs.store') }}" method="POST">

@csrf

@include('jobs.form')

<button class="btn btn-primary">

Save Job

</button>

<a href="{{ route('jobs.index') }}"
class="btn btn-secondary">

Cancel

</a>

</form>

</div>

</div>

</div>

@endsection
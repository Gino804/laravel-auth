@extends('layouts.app')

@section('content')
  <div class="container mt-5">
    <a href="{{ route('admin.projects.index') }}">Go back</a>
    <h1 class="mt-2">{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p><b>Created at: </b>{{ $project->created_at }}</p>
    <p><b>Last update: </b>{{ $project->updated_at }}</p>
    <hr>

    <form class="d-inline" method="POST" action="{{ route('admin.projects.destroy', $project) }}">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">Delete</button>
    </form>

  </div>
@endsection

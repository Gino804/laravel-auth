@extends('layouts.app')

@section('content')
  <div class="container mt-4">
    <form method="POST" action="{{ route('admin.projects.update', $project) }}">
      @method('PUT')
      @include('admin.projects.includes.form-fields')
    </form>
  </div>
@endsection

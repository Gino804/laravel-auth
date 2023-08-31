@extends('layouts.app')

@section('content')
  <div class="container mt-4">
    <form method="POST" action="{{ route('admin.projects.store') }}">
      @include('admin.projects.includes.form-fields')
    </form>
  </div>
@endsection

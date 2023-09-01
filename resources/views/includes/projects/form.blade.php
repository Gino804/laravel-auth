@if ($project->exists)
  <form method="POST" action="{{ route('admin.projects.update', $project) }}">
    @method('PUT')
  @else
    <form method="POST" action="{{ route('admin.projects.store') }}">
@endif

@csrf
<div class="row">
  <div class="col-6">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title"
        value="{{ old('title', $project->title) }}">
    </div>
  </div>
  <div class="col-12">
    <div class="mb-3">
      <label for="surname" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $project->description) }}</textarea>
    </div>
  </div>
  <div class="col-1">
    <button type="submit" class="btn btn-success">Save</button>
  </div>
  <div class="col-1">
    <button type="reset" class="btn btn-warning">Reset</button>
  </div>
</div>

</form>

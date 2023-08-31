@csrf
<div class="row">
  <div class="col-6">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $project->title ?? old('title') }}">
    </div>
  </div>
  <div class="col-12">
    <div class="mb-3">
      <label for="surname" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description">
        {{ $project->description ?? old('description') }}
      </textarea>
    </div>
  </div>
  <div class="col-1">
    <button type="submit" class="btn btn-success">Save</button>
  </div>
  <div class="col-1">
    <button type="reset" class="btn btn-warning">Reset</button>
  </div>
</div>

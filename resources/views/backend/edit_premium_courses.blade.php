@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Premium Course</h3>
            </div>

            <form role="form" action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-body">

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" oninput="generateSlug()">
                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $course->slug }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Instructor</label>
                        <input type="text" class="form-control" name="instructor" value="{{ $course->instructor }}">
                    </div>

                    <div class="form-group">
                        <label>Duration</label>
                        <input type="text" class="form-control" name="duration" value="{{ $course->duration }}">
                    </div>

                    <div class="form-group">
                        <label>Effort</label>
                        <input type="text" class="form-control" name="effort" value="{{ $course->effort }}">
                    </div>

                    <div class="form-group">
                        <label>Format</label>
                        <input type="text" class="form-control" name="format" value="{{ $course->format }}">
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" step="0.01" class="form-control" name="price" value="{{ $course->price }}">
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control textarea" name="short_description" rows="3">{{ $course->short_description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Long Description</label>
                        <textarea class="form-control textarea" name="long_description" rows="5">{{ $course->long_description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Image</label><br>
                        @if($course->image)
                            <img src="{{ asset($course->image) }}" height="80" class="mb-2"><br>
                        @endif
                        <input type="file" class="form-control-file" name="image">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="status" name="status" {{ $course->status ? 'checked' : '' }}>
                        <label class="form-check-label" for="status">Published</label>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Course</button>
                </div>
            </form>

        </div>
    </div>
</div>
<script>
function generateSlug() {
    let title = document.getElementById("title").value;
    let slug = title.toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
    document.getElementById("slug").value = slug;
}
</script>
@endsection

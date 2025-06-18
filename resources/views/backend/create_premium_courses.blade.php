@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add courses</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                

                 <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" required oninput="generateSlug()">
    </div>

    <div class="mb-3">
        <label class="form-label">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" readonly>
    </div>

    <div class="mb-3">
        <label class="form-label">Instructor</label>
        <input type="text" name="instructor" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Duration</label>
        <input type="text" name="duration" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Effort</label>
        <input type="text" name="effort" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Format</label>
        <input type="text" name="format" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" step="0.01" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label ">Short Description</label>
        <textarea name="short_description" class="form-control textarea"></textarea>
    </div>

    

    <div class="mb-3">
        <label class="form-label">Long Description</label>
        <textarea name="long_description" class="form-control textarea"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-control">
            <option value="1" selected>Active</option>
            <option value="0">Inactive</option>
        </select>

                
                


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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

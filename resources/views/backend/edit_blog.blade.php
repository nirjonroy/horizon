@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Blog</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputFile">Home page (if you want to show blog on Home page)</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="homePage">
                        <option value="1" {{ $blog->homePage == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $blog->homePage == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                
                div class="form-group">
                    <label for="exampleInputFile">Cover (if you want to show blog on cover)</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cover">
                        <option value="1" {{ $blog->cover == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $blog->cover == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="exampleInputFile">where to study (if you want to show blog on this page)</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="where_to_study_id">
                        <option value="">Open this select menu</option>
                        @foreach ($studies as $study)
                            <option value="{{ $study->id }}" {{ $blog->where_to_study_id == $study->id ? 'selected' : '' }}>{{ $study->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Life Style (if you want to show blog on this page)</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="life_style_id">
                        <option value="">Open this select menu</option>
                        @foreach ($life as $item)
                            <option value="{{ $item->id }}" {{ $blog->life_style_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <img src="{{asset($blog->image)}}" alt="">
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> Title  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="add title of blog" name="title" value="{{$blog->title}}">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> Descriptions</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description">
                        {{$blog->description}}
                       </textarea>
                    </div>

                  </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
</div>

@endsection

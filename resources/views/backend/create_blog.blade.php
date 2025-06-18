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
            <form role="form" action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputFile">Home page (if you want to show blog on Home page)</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="homePage">
                    <option selected>Open this select menu</option>

                    <option value="1">Yes</option>
                    <option value="0">No</option>



                  </select>
                </div>
                
                
                <div class="form-group">
                    <label for="exampleInputFile">Cover (if you want to show blog on cover)</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="cover">
                    <option selected>Open this select menu</option>

                    <option value="1">Yes</option>
                    <option value="0">No</option>



                  </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">where to study (if you want to show blog on this page)</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="where_to_study_id">
                    <option selected>Open this select menu</option>
                    @foreach ($studies as $study)
                    <option value="{{$study->id}}">{{$study->name}}</option>
                    @endforeach


                  </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Life Style (if you want to show blog on this page)</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="life_style_id">
                    <option selected value="">Open this select menu</option>
                    @foreach ($life as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach


                  </select>
                </div>

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
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="add title of blog" name="title">
                </div>


                <div class="form-group">
                    <label for="exampleInputName"> Descriptions</label>
                    <div class="mb-3">
                      <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description"></textarea>
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

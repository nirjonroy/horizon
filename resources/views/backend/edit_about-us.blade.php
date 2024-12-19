@extends('backend.app')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update About us Informations</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('about-us.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <img src="{{asset($about->image_1)}}" alt="adf" width="50px" height="50px">
                    <div class="form-group">
                        <label for="exampleInputFile">Image 1</label>
                        <div class="input-group">
                          <div class="custom-file">
                            {{-- <img src="{{asset($about->image_1)}}" alt=""> --}}
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image_1">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                    </div>

                    <img src="{{asset($about->image_2)}}" alt="adf" width="50px" height="50px">
                    <div class="form-group">

                        <label for="exampleInputFile">Image 2</label>
                        <div class="input-group">
                          <div class="custom-file">

                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image_2">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                    </div>

                    <img src="{{asset($about->image_3)}}" alt="adf" width="50px" height="50px">
                    <div class="form-group">
                        <label for="exampleInputFile">Image 3</label>
                        <div class="input-group">
                          <div class="custom-file">
                            
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image_3">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="exampleInputName"> About Us  </label>
                        <div class="mb-3">
                          <textarea class="textarea" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="about_us">
                            {{$about->about_us}}
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
    </div>
</section>

@endsection

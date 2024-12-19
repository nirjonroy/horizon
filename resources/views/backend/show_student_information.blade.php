@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Student information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName"> First Name  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->first_name}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Last Name  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->surname}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> email  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->email}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Phone  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" value="{{$info->phone}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Nationality  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->nationality}}" disabled>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputName"> Course  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->course_and_degree}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Subject of Interest  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->subject_of_interest}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Where to Study  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->course_name}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Preferred Session  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$info->preferred_session}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Comments  </label>

                    <textarea class="" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="hero_banner_text" disabled>{{$info->comments}}</textarea>
                  </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
              </div>
            </form>
          </div>
    </div>
</div>

@endsection

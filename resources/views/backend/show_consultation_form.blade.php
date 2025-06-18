@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Consultation information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName"> First Name  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$book->first_name}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Last Name  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$book->last_name}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> email  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$book->email}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Phone  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$book->phone}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Date  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$book->date}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Time  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$book->time}}" disabled>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputName"> Time Zone </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name of university" name="name" value="{{$book->time_zone}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName"> Message  </label>

                    <textarea class="" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="hero_banner_text" disabled>{{$book->additional_info}}</textarea>
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

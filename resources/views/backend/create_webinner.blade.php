@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add webinner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('webinner.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputName"> Date  </label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="add title of blog" name="date">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputName"> Time  </label>
                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="add title of blog" name="time">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Title  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="add title of Webinner" name="title">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> From  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="from which university" name="from">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Meeting Link  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Meeting link" name="link">
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

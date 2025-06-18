@extends('backend.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit webinner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('webinner.update', $webinner->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                
                <div class="form-group">
                  <label for="exampleInputName"> Date </label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="add title of webinner" name="date" value="{{ $webinner->date }}">
              </div>
              
              <div class="form-group">
                  <label for="exampleInputName"> Time </label>
                  <input type="time" class="form-control" id="exampleInputEmail1" placeholder="add title of webinner" name="time" value="{{ $webinner->time }}">
              </div>
              

                <div class="form-group">
                    <label for="exampleInputName"> Title  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="add title of webinner" name="title" value="{{$webinner->title}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> From  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="add title of webinner" name="from" value="{{$webinner->from}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Link  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="add title of webinner" name="link" value="{{$webinner->link}}">
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

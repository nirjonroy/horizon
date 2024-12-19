@extends('backend.app')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Site Informations</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('siteinfo.update', $info->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Logo</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <img src="" alt="">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputname">Site Name</label>
                      <input type="text" class="form-control" id="exampleInputname" placeholder="Enter Site name here" value="{{$info->name}}" name="name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mobile 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Site mobile1 here" name="mobile1" value="{{$info->mobile1}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mobile 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Site mobile2 here" name="mobile2" value="{{$info->mobile2}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email 1</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Site email1 here" name="email1" value="{{$info->email1}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email 2</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Site email2 here" name="email2" value="{{$info->email2}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea class="form-control" name="address" id="" cols="30" rows="10">{{$info->address}}</textarea>

                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$info->description}}</textarea>

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

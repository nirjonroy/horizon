@extends('backend.app')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Who we are</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> --}}

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Image-1</th>
                <th>Image-2 </th>
                <th>Image-3</th>
                
                <th>Action</th>

              </tr>
            </thead>
            <tbody>


              <tr>
                <td><img src="{{asset($about->image_1)}}" alt="logo" width="50px" height="50px"></td>
                <td><img src="{{asset($about->image_2)}}" alt="logo" width="50px" height="50px"></td>
                <td><img src="{{asset($about->image_3)}}" alt="logo" width="50px" height="50px"></td>

                <td>
                   <a href="{{route('about.edit')}}"><i class="fas fa-edit"></i></a>
                   {{-- <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a> --}}


                </td>

              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection

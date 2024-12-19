@extends('backend.app')

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Site Informations</h3>

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
                <th>Name</th>
                <th>Logo</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
            @foreach ($siteinfos as $info)

              <tr>
                <td>{{$info->name}}</td>
                <td><img src="{{asset($info->logo)}}" alt="logo"></td>
                <td>{{$info->mobile1}}</td>
                <td>{{$info->email1}}</td>
                <td>
                   <a href="{{route('siteinfo.edit', $info->id)}}"><i class="fas fa-edit"></i></a>
                   {{-- <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a> --}}


                </td>

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection

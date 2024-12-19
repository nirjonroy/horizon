@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Student Informations</h3>
      <a href="{{route('studentlife.create')}}" class="btn btn-success float-right">Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Mobile</th>
          <th>Email</th>


          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($studentinfo as $key=>$info)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$info->first_name}}</td>
                <td>{{$info->surname}}</td>
                <td>{{$info->phone}}</td>
                <td>{{$info->email}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('studentInformation.show', $info->id)}}">view application</a>
                </td>
            </tr>
            @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

@endsection

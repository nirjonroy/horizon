@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title">Where To Study</h3>
      <a href="{{route('whereToStudy.create')}}" class="btn btn-success float-right">Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Name</th>
          <th>Slider</th>
          <th>image</th>
          <th>Short Description</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($studies as $key => $study)
        <tr>
          <td>{{$key+1}}</td>
          <td><img src="{{asset($study->slider1)}}" alt="" width="100px" height="100px"></td>
          <td><img src="{{asset($study->image_1)}}" alt="" width="100px" height="100px"></td>
          <td> {!!$study->short_description!!}</td>
          <td>
            <a href="{{route('whereToStudy.edit', $study->id)}}"><i class="fas fa-edit"></i></a>


            <form action="{{ route('whereToStudy.destroy', $study->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><i class="fa fa-trash" aria-hidden="true" ></i></button>
            </form>

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

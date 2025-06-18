@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Premium Courses</h3>
      <a href="{{route('courses.create')}}" class="btn btn-success float-right">Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Name</th>
          <th>Instractor</th>
          <th>image</th>
          <th>Short Description</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $key => $course)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$course->title}}</td>
          <td>{{$course->instractor}}</td>
          <td><img src="{{asset($course->image)}}" alt="" width="100px" height="100px"></td>
          <td> {!!$course->short_description!!}</td>
          <td>
            <a href="{{route('courses.edit', $course->id)}}"><i class="fas fa-edit"></i></a>


            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
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

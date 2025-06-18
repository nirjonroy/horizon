@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Blog Informations</h3>
      <a href="{{route('blog.create')}}" class="btn btn-success float-right">Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Image</th>
          <th>Title</th>

          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($blogs as $key=>$item)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($item->image)}}" alt="" width="100px" height="80px"></td>
                <td>{{$item->title}}</td>

                <td>
                    <a href="{{route('blog.edit', $item->id)}}" class="btn btn-warning">Edit</a>

                    <form action="{{route('blog.delete', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
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

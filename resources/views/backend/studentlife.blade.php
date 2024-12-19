@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title">International Student Life</h3>
      <a href="{{route('studentlife.create')}}" class="btn btn-success float-right">Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Hero Banner</th>
          <th>name</th>


          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lifes as $key => $item)
        <tr>
          <td>{{$key+1}}</td>
          <td><img src="{{asset($item->hero_banner)}}" alt="" width="100px" height="80px"></td>
          <td>{{$item->name}}</td>

          <td>
            <a href="{{route('studentlife.edit', $item->id)}}"><i class="fas fa-edit"></i></a>


            <form action="{{ route('studentlife.destroy', $item->id) }}" method="POST">
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

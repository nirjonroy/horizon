@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Online Fees</h3>
      <a href="{{route('fees.online.create')}}" class="btn btn-success float-right">Add</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Degree Name</th>
          <th>Programs</th>
          <th>Total Fee</th>

          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($fees as $key=>$item)
            <tr>
                <td>{{$key+1}}</td>
                <td></td>
                <td>{{$item->program}}</td>
                <td>{{$item->total_fee}}</td>

                <td>
                    <a href="{{route('fees.online.edit', $item->id)}}" class="btn btn-warning">Edit</a>

                    <form action="{{route('fees.online.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                     @if($item->recommend == 0)
                        <a href="{{route('fees.online.recomand', $item->id)}}" class="btn btn-success">Recommended</a>
                    @else
                        <a href="{{route('fees.online.notRecomand', $item->id)}}" class="btn btn-secondary">Not Recommended</a>
                    @endif
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

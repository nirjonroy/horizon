@extends('backend.app')

@section('content')
    <!-- /.card -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Webinners Informations</h3>
            <a href="{{route('webinner.create')}}" class="btn btn-success float-right">Add</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Title</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($webinners as $key => $item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->time}}</td>
                            <td>{{$item->title}}</td>

                            <td>
                                <a href="{{route('webinner.edit', $item->id)}}" class="btn btn-warning">Edit</a>

                                <form action="{{route('webinner.delete', $item->id)}}" method="POST">
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
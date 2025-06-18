@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Consultation   Informations</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>First Name</th>
          <th>Date/Time</th>
          <th>email</th>
          <th>Phone</th>

          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($bookings as $key=>$form)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$form->first_name}}</td>
                <td>{{$form->date}} / {{$form->time}}</td>

                <td>{{$form->email}}</td>
                <td>{{$form->phone}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('consultation.view', $form->id)}}">view Contact</a>
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

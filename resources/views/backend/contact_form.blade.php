@extends('backend.app')

@section('content')
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title"> Contact  Informations</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>email</th>



          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($contactForm as $key=>$form)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$form->first_name}}</td>
                <td>{{$form->last_name}}</td>

                <td>{{$form->email}}</td>
                <td>
                    <a class="btn btn-success" href="{{route('contact.view', $form->id)}}">view Contact</a>
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

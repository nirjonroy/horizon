@extends('backend.app')

@section('content')

  <div class="container">
    <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
      <h3 class="card-title">Add Fees</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" action="{{route('fees.online.update', $fee->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">

        <div class="form-group">
        <label for="exampleInputFile">Type</label>
        <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example"
          name="type">
          <option selected>Open this select menu</option>

          <option value="Online" {{ $fee->type == 'Online' ? 'selected' : '' }}>Online</option>
          <option value="Offline" {{ $fee->type == 'Offline' ? 'selected' : '' }}>Offline</option>
        </select>
        </div>


        <div class="form-group">
        <label for="exampleInputFile">Select Degree </label>
        <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example"
          name="degree_id">
          <option selected value="">Open this select menu</option>
          @foreach ($category as $item)
        <option value="{{$item->id}}" {{ $fee->degree_id == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
      @endforeach


        </select>
        </div>

        <div class="form-group">
        <label for="exampleInputFile">Select Degree </label>
        <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example"
          name="university_id">
          <option selected value="">Open this select menu</option>
          @foreach ($university as $item)
        <option value="{{$item->id}}" {{ $fee->university_id == $item->id ? 'selected' : '' }}>{{$item->name}}
        </option>
      @endforeach


        </select>
        </div>




        <div class="form-group">
        <label for="exampleInputName"> Program </label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add title of program"
          name="program" value="{{$fee->program}}">
        </div>

        <div class="form-group">
        <label for="exampleInputName"> Program (short name) </label>
        <input type="text" class="form-control" id="exampleInputEmail1"
          placeholder="Add title of program short name" name="short_name" value="{{$fee->short_name}}">
        </div>

        <div class="form-group">
        <label for="exampleInputName"> Total Fee </label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Total Course Fee"
          name="total_fee" value="{{$fee->total_fee}}">
        </div>

        <div class="form-group">
        <label for="exampleInputName"> Discounted Fee </label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Discounted Fee"
          name="yearly" value="{{$fee->yearly}}">
        </div>

        <div class="form-group">
        <label for="exampleInputName"> Link </label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Discounted Fee" name="link"
          value="{{$fee->link}}">
        </div>

        <div class="form-group">
        <label for="exampleInputName"> Duration </label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Duration" name="duration"
          value="{{$fee->duration}}">
        </div>





      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
    </div>
  </div>

@endsection
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
            <form role="form" action="{{route('fees.online.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputFile">Type</label>
                <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="type">
                    <option selected>Open this select menu</option>

                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>



                  </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">Select Degree </label>
                <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="degree_id">
                    <option selected value="">Open this select menu</option>
                    @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach


                  </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputFile">Select University </label>
                <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" name="university_id">
                    <option selected value="">Open this select menu</option>
                    @foreach ($university as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach


                  </select>
                </div>




                <div class="form-group">
                    <label for="exampleInputName"> Program  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add title of program" name="program">
                </div>
                <div class="form-group">
                    <label for="exampleInputName"> Program (short name) </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add title of program short name" name="short_name">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Total Fee  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Total Course Fee" name="total_fee">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Yearly Fee  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add Yearly Fee" name="yearly">
                </div>

                <div class="form-group">
                    <label for="exampleInputName"> Duration  </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Duration" name="duration">
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

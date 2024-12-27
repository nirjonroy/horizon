@extends('backend.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('script.update') }}" method="POST">
        @csrf
        @method('PUT') <!-- Change POST to PUT for updates -->
        <div class="form-group">
            <label for="exampleInputName">Google Analytics Code</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="google" rows="3">{{ $scripts->google }}</textarea>
        </div>
    
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="facebook" rows="3">{{ $scripts->facebook }}</textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
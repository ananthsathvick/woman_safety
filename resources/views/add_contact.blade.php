@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Contacts</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('/adc')}}">
                      @csrf
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
</div>

<div class="form-group">
<label for="exampleInputEmail2">Email</label>
<input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter Email" required>
<small id="emailHelp" class="form-text text-muted">We'll never share email with anyone else.</small>
</div>

<div class="form-group">
<label for="exampleInputEmail3">Phone</label>
<input type="number" name="phone" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter Phone" required>
</div>

<div class="form-group">
<label for="exampleInputEmail4">Relation</label>
<input type="text" name="relation" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="How is this person related to you?" required>
</div>

<input type="hidden" name="main" class="form-control" value="{{$name}}">




<button type="submit" class="btn btn-primary">Submit</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

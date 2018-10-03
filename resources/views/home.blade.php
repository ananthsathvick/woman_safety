@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Women safety</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <strong class="text-center d-block">Welcome To Women Safety</strong>

                    At Women Safety, we believe that cities must be made safer and more inclusive for women and everyone.
                    At Women Safety every women can have their own account which helps them to store emergency contacts, share their current location with them.
                    Women safety provides women to participate in forum discussion. And also to book a ride to their desired destination from current location.



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

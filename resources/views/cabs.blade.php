@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book Cabs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card p-1" style="width: 18rem;">
  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0f/Ola_Cabs_logo.svg/1200px-Ola_Cabs_logo.svg.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Book Ola</h5>
    <p class="card-text">Chalo Niklo</p>
    <a class="btn btn-primary" onclick="showPosition()">Go somewhere</a>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


function showPosition() {
     window.location.href = "http://book.olacabs.com/";
}
</script>
@endsection

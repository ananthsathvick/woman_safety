@extends('layouts.app')

@section('content')

<div class="container">
<h1>Forums</h1>
<form action="{{url('/post')}}" id="po">
<div class="form-group">
<label for="exampleFormControlTextarea1">Share your thoughts, discussions and give updates about locations</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Start Typing..."></textarea>
<button type="submit" class="btn btn-secondary btn-lg btn-block my-2">Post</button>
</div>
</form>

<div class="card ">
  <?php $i=0;?>
  @foreach($comments as $comment)
    <?php if($i == 20){break;}?>

  <h5 class="card-header">{{$comment->user}}</h5>
  <div class="card-body">
    {{$comment->comment}}
    <footer class="blockquote-footer d-inline">{{$comment->created_at}}</footer>
      </blockquote>
  </div>

    <div class="dropdown-divider"></div>
<?php $i++;?>
    @endforeach

    </div>





<div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
   $(document).ready(function(){
  $( "#po" ).submit(function(event) {
  //alert( "Handler for .submit() called." );
  event.preventDefault();
  var csrf = $('meta[name="csrf-token"]').attr('content');
  var comment = $("#exampleFormControlTextarea1").val();
  //alert(comment);
$.ajax({
    url: '/form',
    type: 'POST',
    data: {comment : comment , '_token': csrf},
    dataType: 'json',

    success: function( data ) {
        console.log(data);
        $(".card").prepend('<h5 class="card-header">{{$name}}</h5><div class="card-body">'+comment+'<footer class="blockquote-footer d-inline">Just now</footer></blockquote></div><div class="dropdown-divider"></div>');
        $('#exampleFormControlTextarea1').val('');
    }
});
});
});
  </script>

@endsection

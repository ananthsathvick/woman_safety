@extends('layouts.app')

@section('content')
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Women Safety</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
                <div style="overflow-x:auto;">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Inform</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    @foreach($allc as $ac)
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td>{{$ac->name}}</td>
      <td>{{$ac->email}}</td>
      <td>{{$ac->phone}}</td>
      <td><button class="btn btn-primary" onclick="myFunction({{$ac->id}})">To {{$ac->relation}}</button></td>
    </tr>
    <?php $i++; ?>
    @endforeach
  </tbody>
</table>
                </div>
            </div>

    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function myFunction(id) {
  //alert(id);
  var csrf = $('meta[name="csrf-token"]').attr('content');
  $.ajax({
      url: '/send_mail',
      type: 'POST',
      data: {id : id , '_token': csrf},
      dataType: 'json',

      success: function( data ) {
          //console.log(data);


      }
  });
  alert("Successfully Sent");
}
</script>
@endsection

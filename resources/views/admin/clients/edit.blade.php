 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

   {!!Form::model($client,['route'=>['clients.update',$client->id], 'method'=>'PUT'])!!}


   @include('admin.clients.partials.form')

   {!!Form::close()!!}

              </div>
        </div>
    </div>
</div>
@endsection

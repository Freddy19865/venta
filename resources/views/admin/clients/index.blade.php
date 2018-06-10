@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    clientes
                    
                    <a href="{{ route('clients.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                               
                                <td width="10px">
                                    <a href="{{ route('clients.show', $client->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                
                                <td width="10px">
                                    <a href="{{ route('clients.edit', $client->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                               <td width="10px">
                                    {!! Form::open(['route' => ['clients.destroy', $client->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $clients->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
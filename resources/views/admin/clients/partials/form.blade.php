<div class="form-group">
	
	{{Form::label('name','Nombre del cliente')}}
	{{Form::text('name',null,['Class'=>'form-control'])}}
</div>



<div class="form-group">
	{{Form::submit('guardar',['Class','btn btn-sm btn-primary'])}}
	

</div>
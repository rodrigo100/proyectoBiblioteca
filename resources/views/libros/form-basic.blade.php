
@if($errors->has('titulo'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('titulo') }}
	</div>
@else
<div class="form-group">
@endif

		{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingrese titulo del libro'])!!}	
</div>



@if($errors->has('descripcion'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('descripcion') }}
	</div>
@else
<div class="form-group">
@endif	
	 
	    {!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese una breve descripcion'])!!}
</div>


@if($errors->has('archivo'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('archivo') }}
	</div>
@else
<div class="form-group">
@endif
	
	{!! Form::file('archivo') !!}
</div>

@if($errors->has('password'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('password') }}
	</div>
@else
<div class="form-group">
@endif	

	{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su contraseña'])!!}
</div>

@if($errors->has('nombres'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('nombres') }}
	</div>
@else
<div class="form-group">
@endif

		{!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingrese su nombre'])!!}	
</div>



@if($errors->has('apellidos'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('apellidos') }}
	</div>
@else
<div class="form-group">
@endif	
	 
	    {!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Ingrese sus apellidos'])!!}
</div>





@if($errors->has('email'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('email') }}
	</div>
@else
<div class="form-group">
@endif
	{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese su correo electronico'])!!}
</div>






@if($errors->has('username'))
<div class="form-group has-error">
	<div class="help-block">
		{{ $errors->first('username') }}
	</div>
@else
<div class="form-group">
@endif
	{!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Ingrese su nick o nombre de usuario'])!!}	
</div>






@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">Nueva licitacion</div>

<hr/>
{!! Form::open() !!}
	

	<div class = "form group">

	{!! Form::label('name', 'Titulo:') !!}
	{!! Form::text('name', null, ['class' => 'form-control'])!!}
	</div>
<br>
		<div class = "form group">
		{{ 'Caduca:' }}
		<input id="caduca" type="date" class="form-control" name="caduca" value="{{ old('caduca') }}" required autofocus>
	<div class = "form group">
<br>

	{!! Form::label('body', 'Descripcion:') !!}
	{!! Form::textarea('body', null, ['class' => 'form-control'])!!}
	</div>
<br>
	<div class = "form group">

	{!! Form::label('rubro', 'Rubro:') !!}
	{!! Form::text('rubro', null, ['class' => 'form-control'])!!}
	</div>
<br>
	<div class = "form group">
		{{ 'Caduca:' }}
		<input id="caduca" type="date" class="form-control" name="caduca" value="{{ old('caduca') }}" required autofocus>
		

	</div>

	<div class =" form-group">
	{!! Form::submit('Agregar Licitacion', ['class' => 'btn btn-primary form-control']) !!}


{!! Form::close() !!}

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

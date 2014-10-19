@extends('base')

@section('title-section')
<h1>Añadir artículo</h1>  
@stop

@section('body-section')
    
    {{Form::open(array('url'=>'items', 'role' => 'form', 'class' => 'form-horizontal'))}}
    
    <div class="form-group">
    
        {{Form::label('Producto')}}

        {{Form::text('bpoProduct', '', array('class' => 'form-control'))}} 
    
    </div>
    
    <div class="form-group">
  
        {{Form::label('Marca')}}

        {{Form::text('bpoBrand','', array('class' => 'form-control'))}}
    
    </div>
    
        {{Form::submit('Save it!', array('class' => 'btn btn-default'))}}
    
    {{Form::close()}}  

@stop

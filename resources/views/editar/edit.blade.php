@extends('layouts.app')

@section('content')
  {!! Form::model($edition,
    ['route' => ['editar.update', 'edition' => $edition->id],
    'class' => 'form',
    'enctype'=>'multipart/form-data',
    'id'=>'form1',
    'name'=>'form1',
    'method' => 'PUT']) !!}

    @include('editar.formulario')

    {!! Form::close() !!}

@endsection

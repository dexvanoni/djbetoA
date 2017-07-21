@extends('layouts.app')

@section('content')
  {!! Form::model($edition,
    ['route' => ['editar.update', 'edition' => $edition->id],
    'class' => 'form',
    'enctype'=>'multipart/form-data',
    'method' => 'PUT']) !!}

    @include('editar.formulario')

    {!! Form::close() !!}

@endsection

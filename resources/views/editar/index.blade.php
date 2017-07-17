@extends('layouts.app')

@section('content')

@php
  $caminho = '/images/';
@endphp
  <div class="bs-example" data-example-id="hoverable-table">
    <table class="table table-hover" id="pesquisa">
      <thead>
        <center><tr>
          <th>ID</th>
          <th>Data de Criação</th>
          <th>Data de Edição</th>
          <th>Imagem</th>
          <th>Ações</th>
        </tr></center>
      </thead>
      <tbody>
        @foreach ($edition as $editions)
          <tr>
            <th scope="row">{{ $editions->id }}</th>
            <td style="width: 30%" >{{ date('d/m/Y', strtotime($editions->created_at)) }}</td>
            <td style="width: 30%" >{{ date('d/m/Y', strtotime($editions->updated_at)) }}</td>
            <td style="width: 20%" >
              <div class="thumbnail">
                <img src="{!! url($caminho.$editions->img_about) !!}" style="heigth: 100%; width: 100%" alt="aboutMe">
              </div>
            </td>
            <td style="width: 40%" >
              <ul class="list-inline list-small">
                <li title="Editar">
                    <a href="{{ route('editar.edit', ['editions' => $editions->id]) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  </li>
                <li>|</li>
                <li title="Excluir">
                  <form action="{{ route('editar.destroy', ['edition' => $editions->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <p id="large"></p>
                  </form>
                </li>
              </ul>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <a href="{{ route('editar.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
@endsection

@extends('layouts.app')

@section('content')

    <table class="display dataTable" id="lista">
      <thead>
        <center><tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Mensagem</th>
          <th>Data</th>
        </tr></center>
      </thead>
      <tbody>
        @foreach ($contatos as $row)
          <tr>
            <th style="width: 5%"scope="row">{{ $row->id }}</th>
            <td style="width: 15%" scope="row">{{ $row->nome }}</td>
            <td style="width: 25%" scope="row">{{ $row->email }}</td>
            <td style="width: 40%" scope="row">{{ $row->mensagem }}</td>
            <td style="width: 15%" >{{ date('d/m/Y H:i', strtotime($row->created_at)) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>


@endsection

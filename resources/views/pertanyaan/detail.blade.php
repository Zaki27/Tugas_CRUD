@extends('master')
@section('content')
<h3>Detail Pertanyaan<h3>
<table class="table table-hover table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Tanggal Dibuat</th>
      <th scope="col">Tanggal Diperbaharui</th>
    </tr>
  </thead>
  <tbody>
        <tr>
            <td>{{$pertanyaan->judul}}</td>
            <td>{{$pertanyaan->isi}}</td>
            <td>{{$pertanyaan->created_at}}</td>
            <td>{{$pertanyaan->updated_at}}</td>
        </tr>
  </tbody>
</table>
@endsection
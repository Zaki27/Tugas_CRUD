@extends('master')
@section('content')
<br>
<div>
<a href="/jawaban/create" class="btn btn-primary">Tambah Jawaban</a>
</div>
<br>
<table class="table table-hover table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Isi</th>
      <th scope="col">Tanggal Dibuat</th>
      <th scope="col">Tanggal Diperbaharui</th>
      <th scope="col">Jawaban Terpilih</th>
    </tr>
  </thead>
  <tbody>
    @foreach($jawaban as $key => $answer)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$answer->isi}}</td>
            <td>{{$answer->created_at}}</td>
            <td>{{$answer->updated_at}}</td>
            <td>{{$answer->is_selected}}</td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
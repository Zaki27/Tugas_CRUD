@extends('master')
@section('content')
<br>
<div>
<a href="/pertanyaan/create" class="btn btn-primary">Tambah Pertanyaan</a>
</div>
<br>
<table class="table table-hover table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <!-- <th scope="col">Tanggal Dibuat</th>
      <th scope="col">Tanggal Diperbaharui</th> -->
      <th scope="col">Actions</>
    </tr>
  </thead>
  <tbody>
    @foreach($pertanyaan as $key => $ask)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$ask->judul}}</td>
            <td>{{$ask->isi}}</td>
            <!-- <td>{{$ask->created_at}}</td>
            <td>{{$ask->updated_at}}</td> -->
            <td>
              <a href="/pertanyaan/{{$ask->id}}" class="btn btn-sm btn-info">Detail</a>
              <a href="/pertanyaan/{{$ask->id}}/edit" class="btn btn-sm btn-default">Edit</a>
              <form action="/pertanyaan/{{$ask->id}}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
              </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
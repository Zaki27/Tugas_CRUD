@extends('master')
@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Pertanyaan</h3>
    </div>
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul pertanyaan">
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan Isi Pertanyaan">
            </div>
            <div class="form-group">
                <label for="created_at">Tanggal dibuat</label>
                <input type="date" class="form-control" id="created_at" name="created_at">
            </div>
            <div class="form-group">
                <label for="updated_at">Tanggal diperbarui</label>
                <input type="date" class="form-control" id="updated_at" name="updated_at">
            </div>
            </div>                      
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
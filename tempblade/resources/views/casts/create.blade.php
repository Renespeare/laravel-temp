@extends('adminlte.master')

@section('title')
    Create Cast   
@endsection

@section('content')
    <form action="/cast" method="POST" style="margin-left: 10px">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="text" name="umur" class="form-control" id="umur" placeholder="Masukkan Umur">
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" class="form-control" id="bio" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

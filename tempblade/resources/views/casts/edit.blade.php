@extends('adminlte.master')

@section('title')
    Edit Cast
@endsection

@section('content')
    <h2>Edit Cast ID: {{ $post->id }}</h2>
    <form action="/cast/{{ $post->id }}/edit" method="POST" style="margin-left: 10px">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="{{ $post->nama }}" class="form-control" id="nama" placeholder="Masukkan Nama">
            @error('nama')
                <div class="alert alert-danger">
                    masukkan nama!
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="text" name="umur" value="{{ $post->umur }}" class="form-control" id="umur" placeholder="Masukkan Umur">
            @error('umur')
                <div class="alert alert-danger">
                    masukkan umur!
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" class="form-control" id="bio" rows="3">{{ $post->bio }}</textarea>
            @error('bio')
                <div class="alert alert-danger">
                    masukkan bio!
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
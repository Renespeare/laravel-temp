@extends('adminlte.master')

@section('Show Cast')
    
@endsection

@section('content')
    <h2>Show Cast ID: {{ $post->id }}</h2>
    <h4>Nama: {{ $post->nama }}</h4>
    <h4>Umur: {{ $post->umur }}</h4>
    <h4>Bio: {{ $post->bio }}</h4>
@endsection
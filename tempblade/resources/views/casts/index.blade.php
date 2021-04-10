@extends('adminlte.master')

@section('title')
    Cast
@endsection

@section('content')
    <h2>Cast</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Bio</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($post as $key=>$value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->umur }}</td>
                <td>{{ $value->bio }}</td>
                <td>
                    <a href="/cast/{{ $value->id }}" class="btn btn-info">Show</a>
                    <a href="/cast/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/cast/{{ $value->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>No Data</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
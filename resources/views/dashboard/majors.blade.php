@extends('adminlte::page')
@section('title','users')
@section('content')
{{-- create table to view users from the array $users , use bootstrap class --}}
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($majors as $major)
        <tr>
            <th scope="row">{{ $major->id }}</th>
            <td>{{ $major->title }}</td>
            <td>{{ $major->created_at }}</td>
            <td>{{ $major->updated_at }}</td>
        </tr>
        @endforeach
    </table>

            {{ $majors->links() }}
@endsection

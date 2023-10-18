@extends('adminlte::page')
@section('title','doctors')
@section('content')
{{-- create table to view users from the array $users , use bootstrap class --}}
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Major ID</th>
            <th scope="col">Bio</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
        <tr>
            <th scope="row">{{ $doctor->id }}</th>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->major_id }}</td>
            <td>{{ $doctor->bio }}</td>
            <td>{{ $doctor->created_at }}</td>
            <td>{{ $doctor->updated_at }}</td>
        </tr>
        @endforeach
    </table>

            {{ $doctors->links() }}
@endsection

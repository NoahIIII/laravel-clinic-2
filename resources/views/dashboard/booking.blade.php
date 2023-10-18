@extends('adminlte::page')
@section('title','booking')
@section('content')
{{-- create table to view users from the array $users , use bootstrap class --}}
<style>
@import url('https://unpkg.com/css.gg@2.0.0/icons/css/pen.css');    </style>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            <th scope="col">Doctor ID</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scop="col">edit<th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->name }}</td>
            <td>{{ $book->email }}</td>
            <td>{{ $book->phone }}</td>
            <td>{{ $book->doctor_id }}</td>
            <td>{{ $book->date }}</td>
            <td>{{ $book->status }}</td>
            <td>{{ $book->created_at }}</td>
            <td>{{ $book->updated_at }}</td>
            @if ($book->status == 'pending')

            <td><a href="{{ route('updatebooking',$book->id) }}" class="gg-pen"></td>
                @else
                <td>Already {{ $book->status }}</td>
                @endif
        </tr>
        @endforeach
    </table>
    {{ $books->links() }}

@endsection

@extends('adminlte::page')
@section('title','contacts')
@section('content')
<style>
@import url('https://unpkg.com/css.gg@2.0.0/icons/css/remove-r.css');

</style>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">subject</th>
            <th scope="col">Message</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <th scope="row">{{ $contact->id }}</th>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
            <td>{{ $contact->created_at }}</td>
            <td>{{ $contact->updated_at }}</td>
            <td>
                <form action="{{ route('destroycontact',$contact->id) }}" method="post">
                    @csrf
                    @method('delete')
                {{-- create button type submit --}}
                <button type="submit" class="gg-remove-r">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

            {{ $contacts->links() }}
@endsection

@extends('layouts.master')

@section('content')
    <h1>Information</h1>
    @foreach ($info as $person)
        @if ($person['id'] == $id)
            <p>Name: {{ $person['name'] }}</p>
            <p>Age: {{ $person['age'] }}</p>
        @endif
    @endforeach
@endsection

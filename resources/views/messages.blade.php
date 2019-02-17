@extends('layouts.app')

@section('content')
<h2>Your messages:</h2>
@if (count($messages) > 0)
    @foreach ($messages as $message)
    <ul class="list-group m-3">
        <li class="list-group-item"> {{$message->name}}</li>
        <li class="list-group-item"> {{$message->email}}</li>
        <li class="list-group-item"> {{$message->message}}</li>
    </ul>
    @endforeach
@endif

@endsection

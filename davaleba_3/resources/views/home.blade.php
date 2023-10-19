@extends('layouts.app')

@section('content')
    <h2>Quiz List</h2>
    <ul>
        @foreach($quizzes as $quiz)
            <li class="quiz {{ $quiz['status'] }}">
                <h3>{{ $quiz['name'] }}</h3>
                <img src="{{ $quiz['photo'] }}" alt="{{ $quiz['name'] }} Image">
                <p>Status: {{ $quiz['status'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection

@foreach($quizzes as $quiz)
    <h2>{{ $quiz->name }}</h2>
    <p>{{ $quiz->description }}</p>
@endforeach

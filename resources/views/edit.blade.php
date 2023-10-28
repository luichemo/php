<form method="POST" action="/quizzes/{{ $quiz->id }}">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{ $quiz->name }}">
    <button type="submit">Update Quiz</button>
</form>
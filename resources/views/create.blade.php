<form method="POST" action="/quizzes">
    @csrf
    <input type="text" name="name" placeholder="Quiz Name">
    
    <button type="submit">Create Quiz</button>
</form>
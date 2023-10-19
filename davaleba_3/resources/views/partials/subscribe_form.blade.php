<form method="POST" action="/subscribe">
    @csrf
    <input type="email" name="email" placeholder="Your Email">
    <button type="submit">Subscribe</button>
</form>

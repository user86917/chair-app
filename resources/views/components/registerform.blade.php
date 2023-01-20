<form action="{{ route('createUser') }}" method="post">
    @csrf

    <input type="email" name="email" placeholder="Email"><br>

    <input type="text" name="username" placeholder="Username"><br>

    <input type="password" name="password" placeholder="Password"><br>

    <input type="submit" value="Login"><br>
</form>
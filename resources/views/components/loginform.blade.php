
<form action="{{ route('loginUser') }}" method="post">
    @csrf
    
    <input class="  mb-2 rounded-1 p-2" type="text" name="username" placeholder="Username"><br>

    <input class=" mb-2 rounded-1 p-2"type="password" name="password" placeholder="Password"><br>

    <input class=" rounded-1 mb-1 mt-1 p-2 text-light-center bg-dark text-white" type="submit" value="Login" ><br>
</form>
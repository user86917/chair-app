<form action="{{ route("createChair") }}" method="post">
    @csrf
    <input type="hidden" name="user_id" value="{{$user->id}}">
    <input type="text" name="name" placeholder="Title" id="">
    <input type="number" name="amount" placeholder="Price" id="">
    <input type="text" name="body" placeholder="Body" id="">
    <input type="file" name="image" id="">
    <input type="submit" name="" id="">
</form>
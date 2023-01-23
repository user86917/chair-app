<form action="{{ route("updateChair") }}" method="post">
    @csrf
    <input type="hidden" name="post_id">
    <input type="hidden" name="user_id">
    <input type="text" name="name" id="">
    <input type="number" name="amount" id="">
    <input type="text" name="body" id="">
    <input type="file" name="image" id="">
    <input type="sumbmit" name="" id="">
</form>
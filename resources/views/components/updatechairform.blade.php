<form action="{{ route("updateChair") }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$item->id}}">
    <input type="hidden" name="user_id" value="{{$item->user_id}}">
    <input type="text" name="name" id="" value="{{$item->name}}">
    <input type="number" name="amount" id="" value="{{$item->amount}}">
    <input type="text" name="body" id="" value="{{$item->body}}">
    <input type="file" name="image" id="" >
    <input type="submit" value="Update" id="">
</form>
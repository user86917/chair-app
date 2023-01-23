<div class="chairitem col-12 col-sm-6 col-md-4 col-lg-4 p-3">
    <div class="float-end">
        &#8230;
    </div>
    
    <div class="float-none">
        <h1><a href="/chair/update/{{$item->id}}">{{$item->name}}</a></h1>
        <p>{{$item->amount}}</p>
        <p>{{$item->body}}</p>
    </div>
</div>
<ul class="list-group">
    <li class="list-group-item"><a href="/chair/update/{{$item->id}}">Update</a></li>
    <li class="list-group-item"><a href="/chair/delete/{{$item->id}}">Delete</a></li>
</ul>
<div id="chaircontainer" class="container mt-3">
    <div class="d-flex flex-wrap justify-content-start align-items-center">
        @foreach ($items as $item)
            @include('components.chairitem')
        @endforeach
    </div>
</div>
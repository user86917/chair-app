<div class="inventory mt-4 bg-info">
    @for ($i = 0; $i < 20; $i++)
        @foreach ($items as $item)
            @include('components.chairitem')
        @endforeach
    @endfor
</div>
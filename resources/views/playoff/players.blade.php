<ul id="players_sortable" class="list-group">
    @if (!empty($players))
        @foreach($players as $player)
            <li class="list-group-item" id="{{ $player->id }}">{{ $player->name }}</li>
        @endforeach
    @endif

</ul>
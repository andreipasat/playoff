<div id="kg_chose" class="btn-group list-group" role="group" aria-label="Basic example">
    @if (!empty($kg))
        @foreach($kg as $val)
            <button kg_from="{{ $val->weight_from_kg }}" kg_to="{{ $val->weight_to_kg }}" type="button" class="list-group-item list-group-item-action">{{ $val->name . ' ' . $val->weight_from_kg . '-' . $val->weight_to_kg . ' kg' }}</button>
        @endforeach
    @endif
</div>
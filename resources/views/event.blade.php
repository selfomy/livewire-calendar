<div @if ($eventClickEnabled) wire:click.stop="onEventClick('{{ $event['id'] }}')" @endif
    class="bg-white rounded-lg border py-2 px-3 shadow-md cursor-pointer">

    <p class="text-sm font-medium">
        {{ $event['title'] }}
    </p>
    @if (!empty($event['description']))
        <p class="mt-2 text-xs text-white">
            {{ $event['description'] }}
        </p>
    @endif
</div>

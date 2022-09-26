<x-header />
{!! Arr::get($blok, '_editable', '') !!}
<div class="font-[Roboto] px-4">
    @foreach ($blok['body'] as $blok)
        <x-dynamic-component :component="$blok['component']" :blok="$blok" class="mt-4" />
    @endforeach
</div>

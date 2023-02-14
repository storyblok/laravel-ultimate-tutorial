<x-common.layout :name="$story->name">
    <x-dynamic-component :component="$story->content['component']" :blok="$story->content" class="mt-4" />
</x-common.layout>

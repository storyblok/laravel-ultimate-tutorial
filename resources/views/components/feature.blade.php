{!! Arr::get($blok, '_editable', '') !!}
<div class="w-full bg-[#f7f6fd] rounded-[5px] text-center overflow-hidden">
  <img
    src="{{ Arr::get($blok, 'image.filename', '') }}"
    alt="{{ Arr::get($blok, 'image.alt', '') }}"
    class="w-full h-48 xl:h-72 object-cover" />
  <div class="px-12 py-6">
    <h3 class="text-2xl text-[#1d243d] font-bold">
      {{ Arr::get($blok, 'name', '') }}
    </h3>
  </div>
</div>

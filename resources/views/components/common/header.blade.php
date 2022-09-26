<header class="w-full h-24 bg-[#f7f6fd]">
  <div class="container h-full mx-auto flex items-center justify-between">
    <a href="{{url('/')}}" <h1 class="text-[#50b0ae] text-3xl font-bold">Storyblok &#10084; Laravel</h1>
    </a>
    <nav>
      <ul class="flex space-x-8 text-lg font-bold">
        @foreach ($headerMenu as $menuItem)
        <li>
          <x-common.menu_item link="{{url(
            Arr::get($menuItem, 'link.story.full_slug', '/')
          )}}" label="{{Arr::get($menuItem, 'link.story.name', '')}}" />
        </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>

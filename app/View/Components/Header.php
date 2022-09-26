<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Header extends Component
{
    public $headerMenu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $storyblok = new \Storyblok\Client(config('storyblok.api_key'));
        $storyblok->editMode();
        $storyblok->resolveLinks('url');
        // retrieving "config" Story
        $response = $storyblok->getStoryBySlug('config');
        $data = $response->getBody();
        $this->headerMenu = Arr::get($data, 'story.content.header_menu', []);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.header');
    }
}

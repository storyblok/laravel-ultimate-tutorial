@props([
'link' => "text",
'label' => "text"
])
<a href="{{url($link)}}" class="
    {{ (request()->is(preg_replace('/^\//', '', $link))) ? 'router-link-active' : '' }}
    hover:text-[#50b0ae]">{{ $label }}</a>

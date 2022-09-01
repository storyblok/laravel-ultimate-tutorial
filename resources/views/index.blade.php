<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $story->name }}</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <x-dynamic-component :component="$story->content['component']" :blok="$story->content" class="mt-4" />

    <script type="text/javascript" src="//app.storyblok.com/f/storyblok-v2-latest.js"></script>
    <script type="text/javascript">
        const storyblokInstance = new StoryblokBridge()
        storyblokInstance.on('change', () => {
            window.location.reload(true);
        })
    </script>
</body>

</html>

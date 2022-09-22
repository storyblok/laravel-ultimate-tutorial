<?php

use Illuminate\Support\Facades\Route;

// Catch all route
Route::get('/{slug?}', function ($slug = 'home') {
    // Load the Token from the Configuration
    $storyblok = new \Storyblok\Client(config('storyblok.api_key'));
    // If you are using a US space:
    // $storyblok = new \Storyblok\Client(
    //     apiKey: config('storyblok.api_key'),
    //     apiRegion: 'us'
    // );

    // Enable the edit mode to load preview content
    $storyblok->editMode();
    try {
        // retrieve the Story by the slug as parameter
        $response = $storyblok->getStoryBySlug($slug);
        // accessing the body of the response
        $data = $response->getBody();
    } catch (\Storyblok\ApiException $e) {
        // manage the unauthorized error from API
        if ($e->getCode() === 401) {
            abort(401, 'Unauthorized API call. Make sure that you Token is valid');
        }
        // if there is error from API, raising 404 page
        abort(404, $e->getMessage());
    } catch (Exception $e) {
        // any other generic exception raises 500 page
        abort(500, $e->getMessage());
    }
    // load the blade page
    return view('index', ['story' => (object) $data['story']]);
});

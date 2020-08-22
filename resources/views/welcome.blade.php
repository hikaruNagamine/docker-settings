<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Docker Settings</title>
    </head>
    <body>
        <div id="app">
            <main-content-component></main-content-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

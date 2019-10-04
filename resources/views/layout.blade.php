<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Viewer</title>
        <link rel="stylesheet" href="{{ asset(mix('app.css', 'vendor/responsive-viewer')) }}">
    </head>
    <body>
        <div id="app">
            <devices-viewer hostname="{{ request()->getSchemeAndHttpHost() }}"></devices-viewer>
        </div>
        <script src="{{ asset(mix('app.js', 'vendor/responsive-viewer')) }}" defer></script>
    </body>
</html>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.navbar.header')

    <body>
        <div id="app">

            @include('layouts.navbar.navigation')

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>

</html>

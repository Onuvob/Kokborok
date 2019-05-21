<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.navbar.header')


    <body>
        <div class="flex-center position-ref full-height">

            @include('layouts.navbar.navigation')

            <div class="container mt-5">

                <h1 class="text-center mb-3 text-white">Kokborok Bathai</h1>

{{--                pagination button--}}
                @include('layouts.word-layouts.pagination')

{{--                list of words--}}
                @include('layouts.word-layouts.word-list')


            </div>
        </div>
    </body>
</html>

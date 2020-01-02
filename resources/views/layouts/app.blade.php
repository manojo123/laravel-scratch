<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
    <div id="app">
        @include('layouts.nav')
        
        <main class="py-4">
            <div class="container">
                @include('layouts.messages')
                @yield('content')
            </div>
        </main>
    </div>
</body>
@include('layouts.foot')
</html>

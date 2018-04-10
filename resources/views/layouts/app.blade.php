<!DOCTYPE html>
<html lang="en">

    @include('layouts/_head')

    <body>
        <header>
            @include('layouts/_nav')
        </header>

        <main role="main">
            @yield('content')

            @include('layouts/_footer')
        </main>

        @include('layouts/_script')
    </body>

</html>
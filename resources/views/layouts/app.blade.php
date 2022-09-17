<!DOCTYPE html>
<html lang="pt-BR">

@include('layouts.header')

<body>

    <div id="app">

        <div class="shadow-header"></div>

        @include('layouts.navbar')

        @include('layouts.sidebar')

        @yield('content')

        @include('layouts.settings')

    </div>
    
    @include('layouts.scripts')

    @include('sweetalert::alert')
    
</body>

</html>

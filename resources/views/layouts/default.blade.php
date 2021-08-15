<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! Html::style('css/app.css') !!}
    <title>{{ config('app.name', 'Event Pool') }}</title>
</head>
<body>
    @include('partials._navigation')
    
    <div  class="py-3 px-3">
    <section id="header">
        <h1>Find event that interest you!</h1>
    </section>
    <section>
        @yield('content')
    </section>
</div>
</body>
</html>
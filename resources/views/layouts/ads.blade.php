<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style('css/app.css') !!}
    <title>Horokanai Community Center</title>
</head>
<body>
    @include('partials._navigation')

    <div  class="py-3 px-2">
    <section id="header">
        <h1>Welcome to Horokanai Community Center</h1>
    </section>
    
    <section>  
    <div>
        @yield('content')
    </div>
    <div>
        @section('ads')
            <p>visit our Horokanai Soba store!</p>
        @show
    </div>
    </section>
    </div>

</body>
</html>
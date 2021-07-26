<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style('css/app.css') !!}
    <title>Welcome To Beginer Programming Event</title>
</head>
<body>
    <section>
        
    <div>
        @yield('content')
    </div>
    <div>
        @section('ads')
            <p>visit our hackerfair store!</p>
        @show
    </div>
    </section>

</body>
</html>
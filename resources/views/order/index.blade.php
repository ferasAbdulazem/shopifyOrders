<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('normalize.css')}}">
    <link rel="stylesheet" href="{{asset('sakura.css')}}">

    <title>Orders</title>
</head>
<body>
    
    <ul>
        @foreach($orders as $order)
        <li>
            {{$order->name}}
        </li>
        @endforeach
    </ul>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('normalize.css')}}">
    <link rel="stylesheet" href="{{asset('sakura.css')}}">

    <title>Creaete Order</title>
</head>
<body>
    <form method="POST" action="/orders" >
        @csrf
        <label for="name">Name</label>
        <input required name="name" id="name" />
        
        <label for="email">email</label>
        <input required type="email" name="email" id="email" />

        <label for="tags">tags</label>
        <input required type="string" name="tags" id="tags" />
        
        <label for="total_price">Total Price</label>
        <input required type="number" name="total_price" id="total_price" />

        <input type="submit" name="submit" />    
    </form>
</body>
</html>
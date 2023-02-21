<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ secure_asset('normalize.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('sakura.css') }}">

    <title>Orders</title>
</head>

<body>
    <div>
        <h1>Orders</h1>
        <div style="display:flex; justify-content: flex-end"><a style="font-size: 30px" href="/orders/create">+</a>
        </div>
        <table>
            <thead>
                <th>
                    name
                </th>
                <th>
                    email
                </th>
                <th>
                    Total Price
                </th>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>
                            {{ $order->name }}
                        </td>
                        <td>
                            {{ $order->email }}
                        </td>
                        <td>
                            {{ $order->total_price }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

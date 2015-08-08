<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            border: 0;
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato', CentSchbook Mono BT, Bitstream Vera Sans Mono, monofont, monospace;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Cart App</div>
    </div>
    <div>
        @foreach($items as $item)
            <div>Item {{ $item->id }}</div>
            <a href="{{ url("/add-item/$item->id") }}">
                <button class="btn btn-primary">Add {{ $item->name }} to Cart</button>
            </a>
            <a href="{{ url("remove-item/$item->id") }}">
                <button class="btn btn-primary">Remove {{ $item->name }}from Cart</button>
            </a>
        @endforeach
        <div></div>
        <a href="{{ url('/content') }}">
            <button class="btn btn-primary" type="button">Go to Cart Items</button>
        </a>

        <a href="{{ url('checkout') }}">
            <button class="btn btn-primary">Go to Checkout</button>
        </a>
    </div>
</div>
</body>
</html>

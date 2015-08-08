<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<h2>Items in Cart</h2>
@foreach($cart as $item)
    <div>{{ $item->id }} - {{ $item->name }} - {{$item->price}}  - {{ $item->qty }}</div>
@endforeach

<div>Total: ${{ $total }}</div>
<a href="{{ URL::previous() }}">Atrás</a>
<a href="#">Pagar</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<h2>Items in Cart</h2>
@foreach($cart as $item)
    <div>{{ $item->name }} - {{$item->price}}  - {{ $item->qty }}</div>
@endforeach
<a href="{{ URL::previous() }}">Atrás</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Product Map</title>
    <style>
        .color-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<h1>Product</h1>

<h2>{{ $product->name }}</h2>

<h3></h3>
@foreach($product->colors as $color)
    <a href="{{ route('product.show', ['productId' => $product->id, 'color' => $color->name]) }}">
        <div class="color-circle" style="background-color: {{ $color->name }}"></div>
    </a>
@endforeach

<h3>{{ $selectedColor->name }}</h3>
@foreach($sizes as $size)
    <p>{{ $size->name }}</p>
@endforeach
</body>
</html>

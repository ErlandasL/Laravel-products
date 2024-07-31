<!DOCTYPE html>
<html>
<head>
    <title>Show Product</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Product Type: {{ $product->productType }}</p>
    <a href="{{ route('products.index') }}">Back to Products</a>
</body>
</html>
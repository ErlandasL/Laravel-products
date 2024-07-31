<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <label>Description:</label>
        <textarea name="description" required>{{ $product->description }}</textarea>
        <label>Product Type:</label>
        <select name="productType" required>
            <option value="TV" {{ $product->productType == 'TV' ? 'selected' : '' }}>TV</option>
            <option value="Laptop" {{ $product->productType == 'Laptop' ? 'selected' : '' }}>Laptop</option>
            <option value="Phone" {{ $product->productType == 'Phone' ? 'selected' : '' }}>Phone</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
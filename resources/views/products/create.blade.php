<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Description:</label>
        <textarea name="description" required></textarea>
        <label>Product Type:</label>
        <select name="productType" required>
            <option value="TV">TV</option>
            <option value="Laptop">Laptop</option>
            <option value="Phone">Phone</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
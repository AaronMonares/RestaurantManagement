<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product Details <a class  = "btn btn-primary" href="addProduct"> Add Product</a></h2>          
  <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Product Description</th>
            <th>Price</th>
            <th>Image Path</th>
            <th>Category ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product -> id}}</td>
                <td>{{$product -> name}}</td>
                <td>{{$product -> product_description}}</td>
                <td>{{$product -> price}}</td>
                <td>{{$product -> image_path}}</td>
                <td>{{$product -> category_id}}</td>
                <td><a class = "btn btn-primary" href="editProduct/{{$product -> id}}">Edit</a></td>
                <td><a class = "btn btn-danger" href="deleteProduct">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

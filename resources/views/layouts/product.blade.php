<!DOCTYPE html>
<html lang="en">
<head>
  <title> @yield ('title') </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>@yield('header2')</h2>          
  <div class="row">
    <div class="col-md-8">
        <form method = "POST" action= "@yield ('action')">
            <div class="form-group">
                @csrf
                {{-- @method('put') --}}
                <label>Name: </label>
                <input type="text" class = "form-control" name = "name" value="@yield('name_value')">
            </div>
            <div class="form-group">
                <label>Product Description: </label>
                <input type="text" class = "form-control" name = "product_description" value="">
            </div>
            <div class="form-group">
                <label>Price: </label>
                <input type="number" class = "form-control" name = "price" value="">
            </div>
            <div class="form-group">
                <label>Image Path: </label>
                <input type="text" class = "form-control" name = "image_path" value="">
            </div>
            <div class="form-group">
                <label>Category ID: </label>
                <input type="number" class = "form-control" name = "category_id" value="">
            </div>
            <div class="form-group">
                <label>Meal ID: </label>
                <input type="number" class = "form-control" name = "meal_id" value="">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"> @yield ('button')</button>
            </div>
        </form>
    </div>
  </div>
</div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('store.product')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">price</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">image</label>
                    <input type="file" name="image"  class="form-control">
                </div>
                <input type="submit" value="add product" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

</body>
</html>

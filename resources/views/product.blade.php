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
         <a href="{{route('create.product')}}" class="btn btn-primary my-5">add product</a>
         <div class="row">
             <table class="table table-striped">
                 <tr>
                     <th>id</th> <th>name</th> <th>price</th> <th>image</th>
                 </tr>

                 @foreach(\App\Models\Product::all() as $item)

                     <tr>
                         <td>{{$item->id}}</td> <td>{{$item->name}}</td> <td>{{$item->price}}</td> <td><img src="{{asset('storage/'.$item->image)}}" width="100"
                                                                                                            alt=""></td>
                     </tr>
                 @endforeach

             </table>
         </div>
     </div>

</body>
</html>

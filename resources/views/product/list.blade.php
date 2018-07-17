<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <style>
        .bod{
            border: 1px solid #6c757d;
        }
        .image-product img{
            width: 100%;
            height: 220px;
            border: 1px solid #80806B;
        }
        .buy-product{
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Product list</h1>
    <div class="container">
        <div class="row">
            @foreach($foods as $food)
            <div class="col-4 bod">
                <div class="container">
                    <div class="caption text-center">
                        <h3>{{ $food -> title }}</h3>
                    </div>
                    <div class="name-product">
                        <h6>Shoe China</h6>
                    </div>
                    <div class="image-product">
                        <img src="{{$food -> thumbnail}}">
                    </div>
                    <div class="price-product">
                        <h6>Price : {{ $food -> price }}</h6>
                    </div>
                    <div class="information-product">
                        <h6>{{ $food -> description }}</h6>
                    </div>
                    <div class="buy-product">
                        <button type="submit" class="btn btn-primary">Buy</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
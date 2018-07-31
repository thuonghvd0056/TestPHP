<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <h1>Article form</h1>
    <div class="container">
        <div class="row">
    <form action="/admin/product/{{$obj->id}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        <div class="form-group">
            <label>Product Name :</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Product Content :</label>
            <input type="text" name="content" class="form-control">
        </div>
        <div class="form-group">
            <label>Product Image :</label>
            <input type="text" name="image" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-dark">
        </div>
    </form>
        </div>
    </div>
</body>
</html>
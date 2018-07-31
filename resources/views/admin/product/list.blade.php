<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Product list</h1>
    <ul>
    @foreach($list_obj as $item)
        <li>
            <img src="{{$item->image}}" alt="" style="width: 150px"><br>
            {{$item->title}}<br>
            {{$item->content}}<br>
            (<a href="/admin/product/{{$item->id}}/edit">Sửa</a>&nbsp;|&nbsp;<a href="">Xoá</a>)
        </li>
    @endforeach
    </ul>
    <script>
        $('.btn-delete').click(function () {
            var cateId = $(this).attr('href');
            alert(cateId);
            var user_confirm = confirm('Are you sure?');
            if(user_confirm){
                $.ajax({
                    url: 'http://localhost:8000/admin/category/' + cateId,
                    method:'DELETE',
                    data: {
                        '_token': "{{ csrf_token() }}"
                    },
                    success:function (response) {
                        alert('Xoa thanh cong');
                        window.location.reload();
                    },
                    error:function () {
                        alert('error');
                    }
                });
            }else{
                alert('!Okie');
            }
        });
    </script>
</body>
</html>
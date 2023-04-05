<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.min.css">
</head>

<body>
  <div class="cart">
    <div class="container">
      <div class="row">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#id</th>
              <th scope="col">Ảnh sản phẩm</th>
              <th scope="col">Tên</th>
              <th scope="col">Xử lý</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cart as $cartItem)
            <tr>
              <th scope="row">1</th>
              <td>{{$cartItem['name']}}</td>
              <td>{{$cartItem['name']}}</td>
              <td>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
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
      <div class="row mt-3">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#id</th>
              <th scope="col">Ảnh sản phẩm</th>
              <th scope="col">Tên</th>
              <th scope="col">Đơn giá</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Thành tiền</th>
              <th scope="col">Xử lý</th>
            </tr>
          </thead>
          <tbody>
            <?php $total = 0 ?>
            @foreach($cart as $id => $cartItem)
            <?php $total += $cartItem['price'] * $cartItem['quantity'] ?>
            <tr>
              <th scope="row">{{$id}}</th>
              <td>
                <img style="width: 100px; height: 100px; object-fit: contain" src="{{$cartItem['image_path']}}" />
              </td>
              <td>{{$cartItem['name']}}</td>
              <td>{{ number_format($cartItem['price']) }} </td>
              <td>
                <input type="number" value="{{$cartItem['quantity']}}" min="1" />
              </td>
              <td>{{ number_format( $cartItem['price'] * $cartItem['quantity']) }} </td>
              <td>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="col-md-12">
          --------------------------------------------------
          <h2>Total: {{number_format($total)}}</h2>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
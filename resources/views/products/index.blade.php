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
  <style>
    .text-white {
      color: #fff !important;
    }
  </style>
</head>

<body>
  <div class="products">
    <div class="container">
      <div class="row mt-3">
        <div class="col-md-12 d-flex justify-content-end ">
          <a href="{{ route('cart') }}" type="button" class="btn btn-light position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white ">
              4
            </span>
          </a>
        </div>
      </div>
      <div class="row mt-3">
        @foreach($products as $products) <div class="col-md-4">
          <div class="card" style="width: 100wh;">
            <img class="card-img-top" src="{{$products->image_path}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$products->name}}</h5>
              <h6 class="card-title">{{ number_format($products->price) }} (VND)</h6>
              <p class="card-text">{{$products->description}}</p>
            </div>
            <div class="card-footer d-flex justify-content-center">
              <a href="#" class='btn btn-primary add_to_cart' data-url="{{ route('addToCart', ['id' => $products->id]) }}">ADD TO CART</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script>
    function addToCart(event) {
      event.preventDefault()
      let urlCart = $(this).data('url')
      $.ajax({
        type: 'GET',
        url: urlCart,
        dataType: 'json',
        success: function(data) {
          if (data.code === 200) {
            $.toast({
              text: 'Thêm giỏ hàng thành công',
              position: 'top-center',
              icon: 'success',
              stack: false,
              hideAfter: 1000
            })
          }
        },
        error: function() {

        }
      })
    }

    $(function() {
      $('.add_to_cart').on('click', addToCart)
    });
  </script>
</body>

</html>
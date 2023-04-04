<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
  <div class="products">
    <div class="container">
      <div class="row mt-3">
        @foreach($products as $products) <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$products->image_path}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$products->name}}</h5>
              <h6 class="card-title">{{ number_format($products->price) }} (VND)</h6>
              <p class="card-text">{{$products->description}}</p>
              <a href="#" id='add_to_cart' data-url="{{ route('addToCart', ['id' => $products->id]) }}" class="btn btn-primary">ADD TO CART</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    function addToCart(event) {
      event.preventDefault()
      let urlCart = $(this).data('url')
      $.ajax({
        type: 'GET',
        url: urlCart,
        dataType: 'json',
        success: function(data) {

        },
        error: function() {

        }
      })
    }

    $(function() {
      $('#add_to_cart').on('click', addToCart)
    });
  </script>
</body>

</html>
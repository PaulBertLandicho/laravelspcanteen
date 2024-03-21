<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/orders.css')}}">
</head>

<body>
 <div><br><br>
  <center><h2><b>MY CART</b></h2><br>
   <button type="button" onclick="window.location.href='payment'" style="margin-left:270px;width: 110px; font-size: 17px; height: 40px; background-color: maroon; color: #fff; border: none; border-radius:10px;">Place order</button></center><br>
   <div class="form-group">
  
  
           <div class="product-container">
           <div class="product-image">
           <img class="profile" src="{{URL('upload/burgerS.PNG')}}" alt="Product Image" style="width: 150px; height: 100px; border-radius: 15px;"><br>
           </div>
            <div class="product-details">
            <span class="product-name" style="font-size: 20px; font-weight: bold;">Burger</span><br>
    <span class="product-total-price" style="font-size:20px;">₱ 125</span>
            <form action="' . $_SERVER['PHP_SELF'] . '" method="GET">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="update_quantity_id" value="product_id_value">
<button type="button" class="button-maroon minus-button">
    <i class="fas fa-minus" style="color: white;"></i>
</button>
<input type="number" name="new_quantity" value="current_quantity_value" class="quantity-input" readonly>
<button type="button" class="button-maroon plus-button">
    <i class="fas fa-plus" style="color: white;"></i>
</button>

            </form><span class="product-total-price" style="font-size:10px; font-weight: bold;">Total Price: ₱</span><br>
            <a href=""><i class="fas fa-trash" style="margin-left:160px; color: maroon; font-size:15px;"></i></a>
            </div>
            </div>
            <div class="product-container">
           <div class="product-image">
           <img class="profile" src="{{URL('upload/hotdog.PNG')}}" alt="Product Image" style="width: 150px; height: 100px; border-radius: 15px;"><br>
           </div>
            <div class="product-details">
            <span class="product-name" style="font-size: 20px; font-weight: bold;">Hotdog</span><br>
    <span class="product-total-price" style="font-size:20px;">₱ 45</span>
            <form action="' . $_SERVER['PHP_SELF'] . '" method="GET">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="update_quantity_id" value="product_id_value">
<button type="button" class="button-maroon minus-button">
    <i class="fas fa-minus" style="color: white;"></i>
</button>
<input type="number" id="quantity-input" name="new_quantity" value="current_quantity_value" class="quantity-input">
<button type="button" class="button-maroon plus-button">
    <i class="fas fa-plus" style="color: white;"></i>
</button>

            </form><span class="product-total-price" style="font-size:10px; font-weight: bold;">Total Price: ₱</span><br>
            <a href="#"><i class="fas fa-trash" style="margin-left:160px; color: maroon; font-size:15px;"></i></a>
            </div>
            </div>
  
            <div class="icon-bar">
             <a class="active" href="dashboard">
              <i class="fas fa-bars" style="font-size: 24px;"><br>
               <span style="font-size: 16px;">Menu</span>
                </a></i>
                 <a class="active" href="favorite">
                  <i class="fas fa-heart"><br>
                   <span style="font-size: 16px;">Favorite</span>
                    </a></i>
                     <a class="active" href="orders">
                      <i class="fas fa-clipboard-list"style="font-size: 24px;"><br>
                       <span style="font-size: 16px;">Order</span>
                      </a></i>
                     <a class="active" href="orderhistory">
                    <i class="fas fa-history"style="font-size: 24px;"><br>
                   <span style="font-size: 16px;">History</span>
                  </a></i>
                 <a class="active" href="profile">
                <i class="far fa-user-circle"style="font-size: 24px;"><br>
               <span style="font-size: 16px;">Profile</span>
              </a></i>

              <script>
    document.querySelector('.minus-button').addEventListener('click', function() {
        var currentQuantity = parseInt(document.getElementById('quantity-input').value);
        if (currentQuantity > 0) {
            document.getElementById('quantity-input').value = currentQuantity - 1;
        }
    });

    document.querySelector('.plus-button').addEventListener('click', function() {
        var currentQuantity = parseInt(document.getElementById('quantity-input').value);
        document.getElementById('quantity-input').value = currentQuantity + 1;
    });
</script>
            </body>

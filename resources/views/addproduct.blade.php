<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/addproduct.css')}}">
</head>
<body>
  <center>
    <div class="container-shadow">
      <div class="center-icon">
        <img src="https://i.ibb.co/7QLKBSz/423062764-1342544113808335-7405620093325838006-n-removebg-preview.png" alt="423062764-1342544113808335-7405620093325838006-n-removebg-preview" style="width:220px;height:180px;margin-right:10px;">
        <br>
        <br>
        <div class="icon-bar">
          <a class="active" href="admin">
            <span class="fa fa-dashboard ">
              <class style="color: black; margin-left:26px;">Dashboard
            </span>
          </a>
          <a class="active" href="productlist" style="margin-top: 20px;">
            <span class="fa fa-history">
              <class style="color: black; margin-left:26px;">Add Products
            </span>
          </a>
          </span>
          <a class="active" href="transactionhistory" style="margin-top: 20px;">
            <span class="far fa-file">
              <class style="color: black; margin-left:26px;">Transaction History
            </span>
          </a>
          <a class="active" href="orderscanner" style="margin-top: 20px;">
            <span class="fa fa-qrcode">
              <class style="color: black; margin-left:26px;">Order Scanner
            </span>
          </a>
          </span>
          <a class="active" href="loginpage" style="margin-top: 20px;">
            <span class="fa fa-sign-out">
              <class style="color: black; margin-left:26px;">Logout
            </span>
          </a>
          </span>
          <p style="color: #999; font-size:13px; margin-top:24px;">
            <b>SPC CANTEEN</b>
            <br>© 2024 All Rights Reserved
          </p>
  </center>
  </div>
  <div class="container">
    <div class="search-form">
      <form action="" method="GET">
        <input type="text" name="search" placeholder="Search...">
        <button id="searchButton">
          <i class="fa fa-search" style="font-size:20px;"></i>
        </button>
      </form>
    </div>
    <a href="addproduct" class="add-product-btn">
      <i class="far fa-plus-square"></i> Add Product </a>
    <div id="product-list-container">
      <a href="edit.php">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
    </div>

    <div class="floating-container">
<center><h2>Add Product</h2><br>
        <form action="#">
        <label for="image">Product Image:</label><br><br>
        <input type="file" id="image" name="image"><br><br>
            <label for="name">Product Name:</label><br> 
            <input type="text" id="name" name="name"><br>
            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price"><br>
            <label for="category">Category:</label><br>
            <select id="category" name="category">
                <option value="1">Breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Snack</option>
                <option value="4">Beverage</option>
                <option value="5">Dinner</option>
                <option value="6">Dessert</option>
                <option value="7">Healthy</option>
            </select><br><br>       
        <input type="submit" value="Add Product">

            <a href="productlist"><button type="button">Cancel</button></a>
            </form>
</div>  
</body>
<!DOCTYPE html>
<html>
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
    <center><h2><b>MY CART</b></center></h2><br>
            <center><button type="button" onclick="window.location.href='dashboard'" style="margin-left:270px;width: 110px; font-size: 17px; height: 40px; background-color: maroon; color: #fff; border: none; border-radius:10px;">Place order</button></center><br>
            <div id="product-list">
    <a href="myqrcode">
    <img class="profile" src="{{URL('upload/c.PNG')}}" style="margin-left:8px;width: 390px; height: 180px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
    <img class="profile" src="{{URL('upload/u.PNG')}}" style="margin-left:8px;width: 390px; height: 180px; border-radius: 20px; margin-right:5px;margin-bottom:10px;"></a><br>
    <center><button type="button" onclick="window.location.href='dashboard'" style="margin-right:290px;width: 120px; font-size: 17px; height: 30px; background-color: maroon; color: #fff; border: none; border-radius:10px; font-size:14px;">Total Price: ₱140
</button>

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

</body>
</html>

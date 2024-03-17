
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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
<body>

<header class="navbar" style="width: auto; height: 100px;" data-bs-theme="dark">
    <h2>&nbsp; Hello! Romarc</h2><br>
    <div style="display: flex; align-items: center;">
        <!-- Cart icon -->
        <a href="cart">
    <img class="profile" src="{{URL('images/q.PNG')}}" style="width: 50px; height: 50px; border-radius: 50%; margin-right:5px;">
</a>
        <!-- User profile picture -->
        <span class="picture">
            <img class="profile" src="{{URL('images/profile.jpg')}}" style="width: 50px; height: 50px; border-radius: 50%; margin-right:5px;">
        </span>
    </div>
</header>

<div class="icon-container">
    <div class="iconbar">
        <a href="dashboard" style="text-decoration: none;"><img src="https://cdn-icons-png.flaticon.com/512/5562/5562062.png" alt="Home"><div class="icon-text">&nbsp;&nbsp;&nbsp;All</div></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="category1" style="text-decoration: none;"><img src="https://cdn-icons-png.freepik.com/256/3480/3480823.png" alt="Home"><div class="icon-text">Breakfast</div></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="category2" style="text-decoration: none;"><img src="https://cdn-icons-png.flaticon.com/512/5787/5787212.png" alt="Home" ><div class="icon-text"style="color: black;">&nbsp;&nbsp;Lunch</div></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="category3" style="text-decoration: none;"><img src="https://cdn-icons-png.freepik.com/512/2497/2497904.png" alt="Home"><div class="icon-text">&nbsp;&nbsp;Snack</div></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="category4.php" style="text-decoration: none;"><img src="https://cdn2.iconfinder.com/data/icons/food-72/192/.svg-12-512.png" alt="Home"><div class="icon-text">Beverage</div></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="category5.php" style="text-decoration: none;"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSFf5pWRMd8tjnW9HrVQLO2Ir2yTQ2hQJCAvrUlxIdCGIbCRCTh" alt="Home"><div class="icon-text">&nbsp;Dinner</div></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="category6.php" style="text-decoration: none;"><img src="https://cdn-icons-png.flaticon.com/256/6030/6030105.png" alt="Home"><div class="icon-text">&nbsp;Dessert</div></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="category7.php" style="text-decoration: none;"><img src="https://cdn.icon-icons.com/icons2/3277/PNG/512/salad_bowl_food_vegetables_vegan_healthy_food_icon_208011.png" alt="Home"><div class="icon-text">Healthy</div></a>&nbsp;&nbsp;
    </div>
</div>
<br>

<center><div class="search-box">
    <form class="d-flex ms-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input class="form-control me-2" type="search" name="search" placeholder="Search product . . . ." aria-label="Search">
      <i class="fas fa-search"></i></button>
    
</div></center><br>

<center><h3 style="font-size: 20px; font-weight: bold;">Recommended
       <span style="font-size: 15px; font-weight: normal; margin-left:200px;">All</span>
</h3></center>
<br>


<center><div id="product-list-container">
    <div id="product-list">
    <img class="profile" src="{{URL('upload/a.PNG')}}" style="margin-left:8px;width: 390px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
    <img class="profile" src="{{URL('upload/b.PNG')}}" style="margin-left:8px;width: 390px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
    <img class="profile" src="{{URL('upload/r.PNG')}}" style="margin-left:8px;width: 390px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">

</div></center>

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
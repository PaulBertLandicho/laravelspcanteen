<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/productlist.css')}}">
</head>

<body>    
  <center><div class="container shadow" style="width: 305px; height: 680px; background-color: white;">
   <div class="center-icon">   
    <img src="https://i.ibb.co/7QLKBSz/423062764-1342544113808335-7405620093325838006-n-removebg-preview.png" alt="423062764-1342544113808335-7405620093325838006-n-removebg-preview" style="width:220px;height:180px;margin-right:10px;"><br><br>

     <div class="icon-bar">
     <a class="active" href="admin"><span class="fa fa-dashboard "><class style="color: black; margin-left:26px;">Dashboard</span></a><br> 
       <a class="active" href="productlist"><span class="fa fa-history"><class style="color: black; margin-left:26px;">Add Products</span></a><br></span></a>
        <a class="active" href="#"><span class="fa fa-history"><class style="color: black; margin-left:26px;">Order list</span></a><br></span></a>
         <a class="active" href="#"><span class="far fa-file"><class style="color: black; margin-left:26px;">Transaction  History</span></a><br></span></a>
          <a class="active" href="#"><span class="fa fa-qrcode"><class style="color: black; margin-left:26px;">Order Scanner</span></a><br></span></a>
           <a class="active" href="loginpage"><span class="fa fa-sign-out"><class style="color: black; margin-left:26px;">Logout</span></a></span></a><br>
            <p style="color: #999; font-size:13px;"><b>SPC CANTEEN</b><br>© 2024 All Rights Reserved</p>
             </form></center></div>

              <div class="container">
               <div class="search-form">
                <form action="" method="GET">
                 <input type="text" name="search" placeholder="Search...">
                  <input type="submit" value="Search">
                   </form>
                    </div>
                   <a href="superadminaddproduct.php" class="add-product-btn"><i class="far fa-plus-square"></i> Add Product</a>
                  <center><div id="product-list-container">
                <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
              <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
             <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
           <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
          <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
         </div>
        </body>

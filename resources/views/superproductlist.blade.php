@extends('layout.product')


@section('content')
<center>
    <div class="container-shadow">
      <div class="center-icon">
        <img src="https://i.ibb.co/7QLKBSz/423062764-1342544113808335-7405620093325838006-n-removebg-preview.png" alt="423062764-1342544113808335-7405620093325838006-n-removebg-preview" style="width:220px;height:180px;margin-right:10px;">
        <br><br>

      <div class="icon-bar">
       <a class="active" href="superadmin"><span class="fa fa-dashboard "><class style="color: black; margin-left:26px;">Dashboard</span>
      </a><br> 
       <a class="active" href="superproductlist"><span class="far fa-plus-square"><class style="color: black; margin-left:26px;">Add Products</span>
      </a><br>
         <a class="active" href="transactionsuper"><span class="far fa-file"><class style="color: black; margin-left:26px;">Transaction  History</span>
      </a><br>
          <a class="active" href="manageuser"><span class="far fa-address-book"><class style="color: black; margin-left:26px;">Manage User</span>
      </a><br>
          <a class="active" href="loginpage"><span class="fa fa-sign-out"><class style="color: black; margin-left:26px;">Logout</span>
      </a><br>
          <p style="color: #999; font-size:13px;"><b>SPC CANTEEN</b><br>© 2024 All Rights Reserved</p>
      </form>
</center>
             
  <div class="container">
    <div class="search-form">
      <form action="" method="GET">
        <input type="text" name="search" placeholder="Search...">
        <button id="searchButton">
          <i class="fa fa-search" style="font-size:20px;"></i>
        </button>
      </form>
    </div>
    <a href="superaddproduct" class="add-product-btn">
      <i class="far fa-plus-square"></i> Add Product </a>
    <div id="product-list-container" style="text-align:center;">
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
    
@endsection
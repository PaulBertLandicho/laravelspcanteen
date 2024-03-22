@extends('layout.apps')
@section('title')
ADMIN PAGE
@endsection
@section('content')

<center>
    <div class="containershadow">
      <div class="center-icon">
        <img src="https://i.ibb.co/7QLKBSz/423062764-1342544113808335-7405620093325838006-n-removebg-preview.png" alt="423062764-1342544113808335-7405620093325838006-n-removebg-preview" style="width:220px;height:180px;margin-right:10px;">
        <br><br>
        
     <div class="icon-bar">
         <a class="active" href="admin"><span class="fa fa-dashboard "><class style="color: black; margin-left:26px;">Dashboard</span>
       </a><br> 
         <a class="active" href="productlist"><span class="far fa-plus-square"><class style="color: black; margin-left:26px;">Add Products</span>
       </a><br>
         <a class="active" href="transactionhistory"><span class="far fa-file"><class style="color: black; margin-left:26px;">Transaction  History</span>
        </a><br>
         <a class="active" href="orderscanner"><span class="far fa-address-book"><class style="color: black; margin-left:26px;">Order Scanner</span>
        </a><br>
         <a class="active" href="loginpage"><span class="fa fa-sign-out"><class style="color: black; margin-left:26px;">Logout</span>
        </a><br>
         <p style="color: #999; font-size:13px;"><b>SPC CANTEEN</b><br>© 2024 All Rights Reserved</p>
        </form>
</center>
             
  <div class="container-shadow">
    <div class="container">
      <h2>
        <b>Hello Super Admin!</b>
      </h2>
      <div class="topp">
      <div class="box">
          <img class="boxImg" src="upload/first.png" alt="first.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
        <div class="box">
          <img class="boxImg" src="upload/second.png" alt="second.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
        <div class="box">
          <img class="boxImg" src="upload/third.png" alt="third.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
        <div class="box">
          <img class="boxImg" src="upload/first.png" alt="fourth.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
      </div>
      <div class="bottomm">
        <img class="chart" src="upload/chart.png" alt="chart.png">
      </div>
    </div>
    @endsection
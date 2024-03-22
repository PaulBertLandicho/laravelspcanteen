@extends('layout.app')


@section('content')
    
<center>
    <div class="container-shadow">
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


              
     <div class="container">
     <center><h1><b>QR Code Scanner</b></h1>
      <video id="qr-video" width="500" height="400" autoplay></video>
       <div id="qr-result">
        <button type="submit" class="submit" >SCAN</button></div>
       
   <script>
     const video = document.getElementById('qr-video');
     const resultContainer = document.getElementById('qr-result');
     // Access the camera and start streaming
     navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
     .then(stream => {
     video.srcObject = stream;
     video.play();
     })
     .catch(err => console.error('Error accessing the camera:', err));
   </script>
           
@endsection
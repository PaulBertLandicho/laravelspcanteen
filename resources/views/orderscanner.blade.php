<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Scanner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>

<body>    
<center><div class="container shadow" style="width: 305px; height: 680px; background-color: white;">
   <div class="center-icon">   
    <img src="https://i.ibb.co/7QLKBSz/423062764-1342544113808335-7405620093325838006-n-removebg-preview.png" alt="423062764-1342544113808335-7405620093325838006-n-removebg-preview" style="width:220px;height:180px;margin-right:10px;"><br><br>

    <div class="icon-bar">
     <a class="active" href="admin"><span class="fa fa-dashboard "><class style="color: black; margin-left:26px;">Dashboard</span></a><br> 
       <a class="active" href="productlist"><span class="fa fa-history"><class style="color: black; margin-left:26px;">Add Products</span></a><br></span></a>
         <a class="active" href="transactionhistory"><span class="far fa-file"><class style="color: black; margin-left:26px;">Transaction  History</span></a><br></span></a>
          <a class="active" href="orderscanner"><span class="fa fa-qrcode"><class style="color: black; margin-left:26px;">Order Scanner</span></a><br></span></a>
           <a class="active" href="loginpage"><span class="fa fa-sign-out"><class style="color: black; margin-left:26px;">Logout</span></a></span></a><br>
            <p style="color: #999; font-size:13px;"><b>SPC CANTEEN</b><br>© 2024 All Rights Reserved</p>
             </form></center></div>


              
    <div class="container shadow" style="max-width: 1200px; margin-top: 10px; height:655px; background-color: lightgray; margin-top:30px; text-align:center;">
     <h1><b>QR Code Scanner</b></h1>
      <center><video id="qr-video" width="500" height="400" autoplay></video>
       <div id="qr-result">
        <button type="submit" class="submit" style="width: 150px; text-align: center; font-size:17px; height: 50px; background-color: maroon; color: #fff; border: none; border-radius: 3px;">SCAN</button></div>
       
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
           
   </body>

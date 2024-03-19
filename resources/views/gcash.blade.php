<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Profile</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/onhand.css')}}">
  </head>   

<body>
  <center><h2 style="margin-top:15px;"><b>G-CASH PAYMENT</b></h2></center>
   <div class="container">
    <a href="orders" class="left-arrow"><i class="fas fa-arrow-left"style="color:black;"></i></a>
     </div><br><br><center>

      <form action="update_status.php" method="POST">
       <div class="radio-container"style="padding:15px; width:375px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj-EaNUX7Xl0MvpH9sX9_ptLkN2lv76t7v3n4SxRIlIg&s" alt="Your Image" width="50" height="50" style="border-radius: 50%;">
         <label for="status_student"><b>G-CASH</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" id="status_gcash" name="status" value="g-cash" checked>
           </div><br>
           
            <div class="radio-container">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0aNkoR9NYk75SeOo-Qu0hHF5HD0mEWppH74MKaUloTg&s" alt="Your Image" width="50" height="50">
              <label for="status_faculty"><b>School Fee</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" id="status" name="status" value="Student" onclick="navigateToschoolfee()">
                </div><br>
             
                 <div class="radio-container">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShl6fu0z5vqJWKZYIA12KxYdcenv-JwFcUTtdyzVo2Jw&s" alt="Your Image" width="50" height="50">
                   <label for="status_student"><b>Cash On Hand</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="status" name="status" value="Student" onclick="navigateTocashonhand()">
                     </div></form></center><br><br><br><br><br><br>

                   <center><div class="radio">
                  <h3 style="font-size: 20px; font-weight: none; color:gray;">Selected
                 <span style="font-size: 15px; font-weight: normal; margin-left:170px;">2</span>
                </h3>
               <hr>
              <h3 style="font-size: 20px; font-weight: bold;">Total Payment
             <span style="font-size: 15px; font-weight: normal; margin-left:100px;">₱130</span>
            </h3><center>
    
         <div class="form-group">
        <a class="btn btn-primary" href="myqrcode" style="background-color: maroon; width: 300px; color: white; border-color:maroon; border-radius:10px; height:45px; font-size:20px;" role="button"><b>PAY NOW</a>
       </div></div><br><br><br><br><br><br><br><br>

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
                          function navigateToschoolfee() {
                          window.location.href = "#";
                          }
                          function navigateTocashonhand() {
                          window.location.href = "onhand";
                          }
                         </script>
                         </body>

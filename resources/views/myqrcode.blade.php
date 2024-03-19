 <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Profile</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/qrcode.css')}}">
  </head>

<body>
  <div class="container">
   <a href="orders" class="left-arrow"><i class="fas fa-arrow-left"style="color:black; margin-top:15px; margin-left:10px;"></i></a>
    </div>
    
     <ul class="nav"> 
      <center><p style="color: black;font-size: 30px;margin-left:39px;"><b>MY QR CODE</p>
       <div class="container shadow" style="margin-left:36px; width: 350px; max-height: 150px; background-color:white; margin-top: 0px; border-radius: 10px;">  
        <img class="profile" src="{{URL('images/profile.jpg')}}" style="width: 70px; height: 70px; border-radius: 50%; margin-right:5px;">
         <h1 style="color: black; font-size: 20px;"><b>&nbsp;Romarc</b></h1>
          <h1 style="color: gray; font-size: 14px;">&nbsp;Student</h1><br>
           </div></ul>     
            <center><div class="form-group">
             <button class="btn btn-primary" onclick="generateQR()" style="background-color: maroon; width: 150px; color: white; border-color:maroon; border-radius:10px; height:45px; font-size:20px;">View QRCode</button>
              </div><br>

             <img class="profile" src="{{URL('upload/qr.PNG')}}" style="width: 300px; height: 250px; border-radius: 10%; margin-right:5px;">
            </div></center>

         <div class="iconbar">
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
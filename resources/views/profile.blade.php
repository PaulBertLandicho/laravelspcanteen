
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
      <link rel="stylesheet" href="{{asset('css/profile.css')}}">

  </head>
  <body>
  
  <header class="navbar border-bottom border-2 flex-md-nowrap p-0 shadow" style="height: 200px; background-color:maroon;" data-bs-theme="dark">
      <ul class="nav">
  <br><br><center><p style="color: white;font-size: 30px;margin-top: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROFILE</p>

  <center><div class="container shadow" style="margin-left:43px; width: 350px; max-height: 175px; background-color:white; margin-top: 0px; border-radius: 10px;">  
  <div class="container">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="profileEdit.php"><i class="fa fa-edit" style="color: maroon;"></i></a><br>
  <a href="changeprofile.php" style="text-decoration: none;">
  <img class="profile" src="{{URL('images/profile.jpg')}}" style="width: 70px; height: 70px; border-radius: 50%; margin-right:5px;">

      <center>
          <b><p style="color:black; font-size: 25px;"></p></b>
          <h1 style="color: gray; font-size: 18px;">&nbsp;Romarc</h1>
          <h1 style="color: gray; font-size: 14px;">&nbsp;Student</h1><br>

  </div>
    </ul>       
  </header><br><br><br><br>

  <div class="icon-bar">
  <a class="active" href="dashboard"><span class="fa fa-dashboard ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<class style="color: black;">Dashboard</span></a><br><br> 
    <a class="active" href="orderhistory"><span class="fa fa-history">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<class style="color: black;">Order&nbsp;History</span></a><br></span></a><br> 
    <a class="active" href="about.php"><span class="fa fa-info-circle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<class style="color: black;">About</span></a><br></span></a><br> 
    <a class="active" href="loginpage"><span class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<class style="color: black;">Logout</span></a><br></span></a><br>  
  </div><br>

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
  </html>+

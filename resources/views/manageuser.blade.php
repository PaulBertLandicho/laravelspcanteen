<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>

<body>    
<center><div class="container-shadow">
   <div class="center-icon">   
    <img src="https://i.ibb.co/7QLKBSz/423062764-1342544113808335-7405620093325838006-n-removebg-preview.png" alt="423062764-1342544113808335-7405620093325838006-n-removebg-preview" style="width:220px;height:180px;margin-right:10px;"><br><br>

    <div class="icon-bar">
    <a class="active" href="superadmin"><span class="fa fa-dashboard "><class style="color: black; margin-left:26px;">Dashboard</span></a><br> 
       <a class="active" href="superproductlist"><span class="far fa-plus-square"><class style="color: black; margin-left:26px;">Add Products</span></a><br></span></a>
         <a class="active" href="transactionsuper"><span class="far fa-file"><class style="color: black; margin-left:26px;">Transaction  History</span></a><br></span></a>
          <a class="active" href="manageuser"><span class="far fa-address-book"><class style="color: black; margin-left:26px;">Manage User</span></a><br></span></a>
           <a class="active" href="loginpage"><span class="fa fa-sign-out"><class style="color: black; margin-left:26px;">Logout</span></a></span></a><br>
            <p style="color: #999; font-size:13px;"><b>SPC CANTEEN</b><br>© 2024 All Rights Reserved</p>
             </form></center></div>


              
    <div class="container">
      <h2 style="margin-bottom:117px;"><b>Manage User</b></h2>
    <div class="container shadow " style="width: 1000px; margin-top:5px; height:255px; background-color: white; border-radius: 5px;  margin-bottom: 20px;">
    <p style="font-size: 18px; margin-left:10px; color:black; font-weight: bold;">User Profile
        <span style="font-size: 18px; font-weight: normal; margin-left:40px; font-weight: bold;">Username
        <span style="font-size: 18px; font-weight: normal; margin-left:70px; font-weight: bold;">Student_Id
        <span style="font-size: 18px; font-weight: normal; margin-left:80px; font-weight: bold;"> Email</span>
        <span style="font-size: 18px; font-weight: normal; margin-left:120px; font-weight: bold;"> Status</span>
        <span style="font-size: 18px; font-weight: normal; margin-left:130px; font-weight: bold;">Action</span>
        <hr>
        <img class="profile" src="{{URL('images/pic.PNG')}}" style="width: 60px; height: 60px; border-radius: 50%; margin-left:5px;">
            <span style="font-size: 15px; font-weight: normal; margin-left:70px; ">Romarc Bongcaron</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:65px; ">7202</span>
            <span style="font-size: 15px; font-weight: normal;  margin-left:90px;">romarc@gmail.com</span>
            <span style="font-size: 15px; font-weight: normal;  margin-left:70px;">Student</span>

            <!-- Button added here -->
            <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 60px; width: 80px; font-size: 17px; height: 40px; background-color: blue; border: none; border-radius: 7px; color:white;">Edit</button>
            <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 4px; width: 85px; font-size: 17px; height: 40px; background-color: red; border: none; border-radius: 7px; color:white;">Remove</button>
      
        <hr>
        <img class="profile" src="{{URL('images/profile.jpg')}}" style="width: 60px; height: 60px; border-radius: 50%; margin-right:5px;">
            <span style="font-size: 15px; font-weight: normal; margin-left:70px; ">Harley Cabasagan</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:70px; ">52024</span>
            <span style="font-size: 15px; font-weight: normal;  margin-left:90px;">harley@gmail.com</span>
            <span style="font-size: 15px; font-weight: normal;  margin-left:70px;">Student</span>
            <!-- Button added here -->
            <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 60px; width: 80px; font-size: 17px; height: 40px; background-color: blue; border: none; border-radius: 7px; color:white;">Edit</button>
            <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 4px; width: 85px; font-size: 17px; height: 40px; background-color: red; border: none; border-radius: 7px; color:white;">Remove</button>
    </p>
</div>	      

         </body>

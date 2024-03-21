<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>transaction history</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search...">
            <button id="searchButton"><i class="fa fa-search" style="font-size:20px;"></i></button>
        </div>
        
              
             <div class="container">
            <h2 style="margin-bottom:180px;"><b>Transaction History</b></h2>
            <div class="container " style="width: 1000px;  height:97px; background-color: white; border-radius: 17px;  margin-bottom: 20px;">
    <p style="font-size: 15px; margin-left:20px; color:gray;">Status
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Amount
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Date
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Transaction Date</span>
        <h3 style="font-size: 15px; font-weight: bold; ">
            <i class="fa fa-circle" style="color: orange; margin-right: 10px;"></i>Processing
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">₱ 135.00</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">5 February 2024</span>
            <span style="font-size: 15px; font-weight: normal; font-weight: bold;  margin-left:130px;">SPC2024-69</span>
            <!-- Button added here -->
            <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 60px; width: 100px; font-size: 17px; height: 30px; background-color: maroon; color: #fff; border: none; border-radius: 3px;">Details</button>
        </h3>
    </p>
</div>
<div class="container " style="width: 1000px; margin-bottom: 4px; height:97px; background-color: white; border-radius: 17px;  margin-bottom: 20px;">
    <p style="font-size: 15px; margin-left:20px; color:gray;">Status
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Amount
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Date
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Transaction Date</span>
        <h3 style="font-size: 15px; font-weight: bold; ">
            <i class="fa fa-circle" style="color: red; margin-right: 10px;"></i>Cancelled
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">₱ 105.00</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">3 February 2024</span>
            <span style="font-size: 15px; font-weight: normal; font-weight: bold;  margin-left:140px;">SPC2024-69</span>
            <!-- Button added here -->
            <button type="button" onclick="window.location.href='#'" style="margin-left: 60px; width: 100px; font-size: 17px; height: 30px; background-color: maroon; color: #fff; border: none; border-radius: 3px;">Details</button>
        </h3>
    </p>
</div>
<div class="container " style="width: 1000px; margin-bottom: 4px; height:97px; background-color: white; border-radius: 17px;  margin-bottom: 20px;">
    <p style="font-size: 15px; margin-left:20px; color:gray;">Status
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Amount
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Date
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Transaction Date</span>
        <h3 style="font-size: 15px; font-weight: bold; ">
            <i class="fa fa-circle" style="color: green; margin-right: 10px;"></i>Successful
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">₱ 35.00</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">3 February 2024</span>
            <span style="font-size: 15px; font-weight: normal; font-weight: bold;  margin-left:145px;">SPC2024-69</span>
            <!-- Button added here -->
            <button type="button" onclick="window.location.href='#'" style="margin-left: 60px; width: 100px; font-size: 17px; height: 30px; background-color: maroon; color: #fff; border: none; border-radius: 3px;">Details</button>
        </h3>
    </p>
</div>
         </body>

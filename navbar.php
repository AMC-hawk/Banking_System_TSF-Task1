<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #4a47a3;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav button:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 220px; /* Same as the width of the sidenav */
  width: 100%;
  height: 120px;
 
  background-color: #413c69;
  padding: 20px;
  color: white;
}

.main h2{
    color: white;
    font-size: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
</head>
<body>

<div class="sidenav">
  <a href="index.php" style="background-color: #e1e5ea; margin-bottom: 20px;">Home</a>
  <a href="createuser.php" style="background-color: #7868e6; color: white; margin-bottom: 15px; font-size: 20px; width: 200px; margin-left: 10px; border-radius: 10px;">Create User</a>
  <!-- <a href="createuser.php"><button style="background-color: #ffc93c;">Create User</button></a> -->
  
  <a href="transactionhistory.php" style="background-color:#7868e6; color: white; margin-bottom: 15px; font-size: 20px; width: 200px; margin-left: 10px; border-radius: 10px;">Transaction History</a>
  <a href="transfermoney.php" style="background-color: #7868e6; color: white; margin-bottom: 15px; font-size: 20px; width: 200px; margin-left: 10px; border-radius: 10px;">Make a Transaction</a>
</div>

<div class="main">
  <h2>Basic Banking System</h2>
  <p>The Sparks Foundation Task 1</p>
</div>
   
</body>
</html> 

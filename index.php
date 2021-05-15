<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>

</head>
<style>
    #try1{
        margin: 20px;
        width: 200px;
        height: 200px;
        margin-left: 50px;

    }

    #try2{
        margin: 20px;
        width: 400px;
        height: 200px;
        margin-left: 50px;

    }

    #try3{
        margin: 20px;
        width: 200px;
        height: 200px;
        margin-left: 50px;

    }

    #try5{
        margin-left: 25px;
    }
    #try6{
        margin-left: 35px;
    }

    .container{
        margin-left: 150px;
        margin-top: 20px;
    }
</style>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container">
      

        <div class="row activity text-center">
            <div class="col-md act">
                <img src="img/user1.png" alt="userimg" class="img-fluid" id="try1">
                <br>
                <a href="createuser.php" id="try5"><button style="background-color: #709fb0;">Create User</button></a>
            </div>

            <div class="col-md act">
                <img src="img/trans.jpg" alt="transferimg" class="img-fluid" id="try2" >
                <br>
                <a href="transfermoney.php"><button style="background-color: #709fb0;">Make a Transaction</button></a>
            </div>

            <div class="col-md act" >
                <img src="img/3.png" alt="historyimg" class="img-fluid" id="try3" >
                <br>
                <a href="transactionhistory.php" id="try6"><button style="background-color: #709fb0;">Transaction History</button></a>
            </div>

        </div>

    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>
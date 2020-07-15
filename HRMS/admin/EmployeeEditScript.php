<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Manager Dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>

        <div class="wrapper">


            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>



   <?php
    include("../db.php");
    $sqlq=$empid=$title=$fname=$lname=$contact=$email=$address=$salary=$password="";
    // $emailErr1=$nameErr1 = $nameErr2 = $nameErr3=$emailErr2=$nameErr4=$nameErr5=$nameErr6=emailErr3=$nameErr7=$nameErr8="";
    if(isset($_POST["submitd"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //name



// 1
      $empid = ($_POST["empid"]);
// 2
     // $fname = ($_POST["title"]);
// 3

      $fname = ($_POST["fname"]);
// 4
      $lname = ($_POST["lname"]);
// 5
      $contact = ($_POST["contact"]);
//6
      $email = ($_POST["email"]);
// 7
      $address = ($_POST["address"]);
// 10
      $salary = ($_POST["salary"]);
// 11
      $password = ($_POST["password"]);



echo $empid,$title,$fname,$lname,$contact,$email,$address,$salary,$password;
        $insertvalue=("UPDATE hotel.employee SET fname='{$fname}',lname='{$lname}',contact='{$contact}',email='{$email}',address='{$address}',salary='{$salary}',password='{$password}' WHERE empid='{$empid}'");
     //'{$encryptpass}'
     if ($con->query($insertvalue) === TRUE) {
            echo "<script type='text/javascript'>alert('Successful Updated !!')</script>";
       }else {
     echo "Error Occured  : " . $sqlq . "<br>" . mysqli_error($con);
   }

    }
  }
   ?>

  <?php header('Location: '.'addemployee.php');?> -->

                <div class="line"></div>

                <div class="line"></div>

                <p>-------------------------------------------------Hotel Reservation Management System--------------------------------------------------</p>

                  </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>

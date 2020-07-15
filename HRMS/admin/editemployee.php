<?php>
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <title>Administrator    </title> -->
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Employee</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a> -->
            </div>
        </nav>
         <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
                    <li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a  href="addemployee.php"><i class="fa fa-qrcode"></i> Add Employee</a>
                    </li>
                    <li>
                      <a  href="attendance.php"><i class="fa fa-qrcode"></i> Employee Attendance</a>
                    </li>



                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>


                    </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
        <div id="page-inner">

  <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                    <h2 align="center"> Edit Employee</h2>

                    </div>
                </nav>

   <?php
                   include("../db.php");
                   $empid = $_GET['id'];
                   $query = "SELECT * FROM hotel.employee WHERE empid = '$empid'";
                   $result = mysqli_query($con,$query);
                   $row = mysqli_fetch_array($result);
     ?>



     <form method="post" action="EmployeeEditScript.php"/>

  <table>

  <tr>
  <td>Emp ID:</td>
  <td><input type="number" name="empid" value="<?php echo $row['empid'] ?>" readonly="true"></td>
  </tr>

  <!-- <tr>
  <td>Title:</td>
  <td><input type="text" name="title" value="<?php echo $row['title'] ?>" required></td>
  </tr> -->



  <tr>
  <td>First Name:</td>
  <td><input type="text" name="fname" value="<?php echo $row['fname'] ?>" required></td>
  </tr>

  <tr>
  <td>Last Name:</td>
  <td><input type="text" name="lname" value="<?php echo $row['lname'] ?>" reruired></td>
  </tr>
  <tr>
  <td>Contact:</td>
  <td><input type="number" name="contact" value="<?php echo $row['contact'] ?>" reruired></td>
  </tr>
  <tr>
  <td>Email:</td>
  <td><input type="email" name="email" value="<?php echo $row['email'] ?>" reruired></td>
  </tr>
  <tr>
  <td>Address:</td>
  <td><input type="address" name="address" value="<?php echo $row['address'] ?>" reruired></td>
  </tr>
  <tr>
  <tr>
  <td>Salary:</td>
  <td><input type="text" name="salary" value="<?php echo $row['salary'] ?>" reruired></td>
  </tr>
  <tr>
  <td>Password:</td>
  <td><input type="Password" name="password" value="<?php echo $row['password'] ?>" reruired></td>
  </tr>

  </table>
<input type="submit" name="submitd" value="Finish Edit">
  </form>

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

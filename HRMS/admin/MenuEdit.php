<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>HRMS-Manager</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="../styles.css">



  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <title>Administrator  </title> -->
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
</head>
<body>

  <div class="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"></a>
      </div>

      <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
      </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

          <li>
            <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
          </li>
          <li>
            <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
          </li>
          <li>
            <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
          </li>
          <li>
            <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
          </li>
          <li>
            <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>


          </li>                    <li>
            <a  href="add.php"><i class="fa fa-qrcode"></i> Menu</a>


          </li>
          <li>
            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>




        </ul>

      </div>

    </nav>
    <!-- /. NAV SIDE  -->



    <!-- Page Content Holder -->
    <div id="content">

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <h2 align="center"> Edit Menu</h2>

        </div>
      </nav>

      <?php
      include("../db.php");
      $dishid = $_GET['id'];
      $query = "SELECT * FROM hotel.menu WHERE MenuId = '$dishid'";
      $result = mysqli_query($con,$query);
      $row = mysqli_fetch_array($result);
      ?>
      <form method="post" action="Editscript.php"/>

      <table>

        <tr>
          <td>Dish ID:</td>
          <td><input type="number" name="dishid" value="<?php echo $row['MenuId'] ?>" readonly="true"></td>
        </tr>

        <tr>
          <td>Dish Name:</td>
          <td><input type="text" name="dishname" value="<?php echo $row['DishName'] ?>"></td>
        </tr>

        <tr>
          <td>Unit Price:</td>
          <td><input type="number" name="price" value="<?php echo $row['Price'] ?>"></td>
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

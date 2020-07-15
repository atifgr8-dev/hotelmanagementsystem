<?php
session_start();
if(!isset($_SESSION["user"]))
{
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>HRMS-Menu</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="../styles.css">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administrator  </title>
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
          </li>

          <li>
            <a  href="add.php"><i class="fa fa-qrcode"></i> Menu</a>
          </li>

          <li>
            <a  href="addemployee.php"><i class="fa fa-qrcode"></i> Add Employee</a>
          </li>

          <li>
            <a  href="attendance.php"><i class="fa fa-qrcode"></i> Employee Attendance</a>
          </li>


          <li>
            <a  href="empReport.php"><i class="fa fa-qrcode"></i> Employee Details</a>
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


          <h2 align="center">HRMS MENU</h2>

        </div>
      </nav>

      <!-- <h2 align="center">HRMS MENU</h2> -->
      <?php
      include("../db.php");
      // ---------Validation Checks on data------------------//
      $sqlq=$nameErr = $emailErr="";
      if(isset($_POST["submit1"])){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["dishname"])) {
            $nameErr = "Name is also required";
          } else {
            $dishname = ($_POST["dishname"]);
          }

          if (empty($_POST["price"])) {
            $emailErr = "Price is also required";
          } else {
            $price = ($_POST["price"]);
          }

          //------------------insert data in database---------------------------//
          if(!empty($dishname) && !empty($price)) {
            $insertvalue=("INSERT INTO hotel.menu(DishName,Price) VALUES ('{$dishname}','{$price}')");
            if ($con->query($insertvalue) === TRUE) {

            }else {
              echo "Field are Empty or This Error Occured : " . $sqlq . "<br>" . mysqli_error($con);
            }
            echo "<script type='text/javascript'>alert('successful data is entered !!')</script>";
          }
          $price=$dishname="";
        }
      }

      ?>
      <div class="row">
        <div class="col-md-6">      <h2>Add Menu Details</h2>
          <table class="table" style="width:100%">
            <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <tr>
                <td> Dish Name:*</td>
                <td>
                  <input class="form-control" type="text" name="dishname" placeholder="Enter Dish Name" maxlength="20">
                  <span class="error"> <?php echo $nameErr;?></span>
                </td>
              </tr>
              <tr>
                <td>Price Per Unit ($)*</td>
                <td>
                  <input class="form-control" type="number" name="price" placeholder="e.g 120">
                  <span class="error"> <?php echo $emailErr;?></span>
                </td>
                <br>
                <tr><td>  <input class="btn btn-info navbar-btn" type="submit" name="submit1" value="Submit"></td></tr>
              </form>
            </table>
            <!-- DELEETE -->
            <?php
            include("../db.php");
            // ---------Validation Checks on data------------------//
            $sqlq=$nameErr = $emailErr="";
            if(isset($_POST["delete"])){
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //name
                if (empty($_POST["del"])) {
                  $nameErr = "ID is also required";
                } else {
                  $delete = ($_POST["del"]);
                }
                if(!empty($delete)) {
                  $con->query("SET FOREIGN_KEY_CHECKS=0");
                  $insertvalue=("DELETE FROM hotel.menu WHERE MenuId='{$delete}'");
                  $con->query("SET FOREIGN_KEY_CHECKS=1");
                  if ($con->query($insertvalue) === TRUE) {
                    if(mysqli_affected_rows($con)==0)
                    {
                      echo "<script type='text/javascript'>alert('No Menu Item corresponding to This ID found')</script>"; goto a;
                    }
                    echo "<script type='text/javascript'>alert('DELETED Successfuly !!')</script>";
                    $con->query("ALTER TABLE menu AUTO_INCREMENT = 1");
                  }
                  else {
                    echo "Field are Empty or This Error Occured : " . $sqlq . "<br>" . mysqli_error($con);
                    echo '<script>alert("Fields are Empty") </script>' ;
                  }
                  a:
                }
              }
            }
            ?>
            <h2>Delete Menu Item</h2>
            <table class="table">
              <form submit="" method="post">
                Enter Menu ID to Delete:*
                <input class="form-control" type="number" name="del" placeholder="Enter Menu ID e.g 2">
                <input class="btn btn-info navbar-btn" type="submit" name="delete" value="Confirm Deletion">
              </form>
            </table>
          </div>
          <div class="col-md-6">  <h2>Menu List</h2>
            <table class='table' cellpadding="10" style="width:100%">
              <tr>
                <th>Dish ID</th>
                <th>Dish Name</th>
                <th>Unit Price($)</th>
                <th>Edit</th>
              </tr>
              <?php
              $query="SELECT * FROM hotel.menu";
              $result=mysqli_query($con,$query);
              while ($row=mysqli_fetch_assoc($result)){
                //  echo "<table class='table' style='padding:5px;'>";
                echo ("<tr><td>$row[MenuId]</td>");
                echo ("<td>$row[DishName]\t</td>");
                echo ("<td>$row[Price]\t</td>");
                echo ("<td><a href=\"MenuEdit.php?id=$row[MenuId]\" style='color:#5bc0de'>Edit</a></td></tr>");
              }
              echo "<br>"

              ?>
            </table>

          </div>

        </div>
        <h3></h3>
        <p>---------------------------------------------Hotel Reservation Management System------------------------------------------------------</p>
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
